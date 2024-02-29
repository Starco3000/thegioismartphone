<?php
    if(isset($_GET['pages'])){
        $page = $_GET['pages'];
    }else{
        $page = '';
    }
    if($page =='' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*5)-5;
    }

    $sql_pro = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc ORDER BY 
    sanpham.id_sanpham DESC LIMIT $begin,5";
    $query_pro = mysqli_query($conn,$sql_pro);
    
?>
<div id="new-product-title">Sản phẩm mới nhất</div>
        <ul class="list-product">
        <?php
            while($row = mysqli_fetch_array($query_pro)){
        ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
                    <div class="product-info">
                        <p class="product-title"><?php echo $row['tensp'] ?></p>
                        <p class="product-price"><?php echo number_format($row['giasp'],0,',','.').'VND' ?></p>
                        <p style="text-align: center; color: blue"><?php echo $row['tendanhmuc'] ?></p>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>
        </ul>
        <div style="clear: both;"></div>
        <?php
        $sql_page = mysqli_query($conn, "SELECT * FROM sanpham");
        $row_count = mysqli_num_rows($sql_page);
        $pages = ceil($row_count/5);
        ?>
        <ul class="list_trang">
            <p>Trang: </p>
            <div id="list-tab">
            <?php
            for($i=1;$i<=$pages;$i++){
            ?>
                <li <?php if($i==$page){}else{echo ''; } ?>><a href="index.php?pages=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
            }
            ?>
            </div>
        </ul>
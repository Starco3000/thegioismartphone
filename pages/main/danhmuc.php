<?php
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($conn,$sql_pro);
    //get ten danh muc
    $sql_cate = "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($conn,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h3>
        <ul class="list-product">
            <?php
            while($row_pro = mysqli_fetch_array($query_pro)){
            ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    <p class="product-title"><?php echo $row_pro['tensp'] ?></p>
                    <p class="product-price"><?php echo number_format($row_pro['giasp'],0,',','.').'VND' ?></p>
                </a>
            </li>
            <?php 
            }
            ?>
        </ul> 
<?php
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['key'];
}else{
    $tukhoa = '';
}
    $sql_search_pro = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.tensp LIKE '%".$tukhoa."%'";
    $query_search_pro = mysqli_query($conn,$sql_search_pro);
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['key'] ?></h3>
        <ul class="list-product">
        <?php
            while($row = mysqli_fetch_array($query_search_pro)){
        ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
                    <p class="product-title"><?php echo $row['tensp'] ?></p>
                    <p class="product-price"><?php echo number_format($row['giasp'],0,',','.').'VND' ?></p>
                    <p style="text-align: center; color: blue"><?php echo $row['tendanhmuc'] ?></p>
                </a>
            </li>
        <?php
        }
        ?>
        </ul>
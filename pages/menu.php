<?php

$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);

?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>

<div class="menu">
    <ul class="list-menu">
        <li><a href="index.php"><i class="fa-solid fa-house-chimney" style="margin-right:5px;">
                </i>Trang chủ</a></li>
        <?php
        // while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <!-- <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li> -->
        <?php
        // }
        ?>
        <li><a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping" style="margin-right:5px;"></i>Giỏ hàng</a></li>
        <li><a href="index.php?quanly=tintuc"><i class="fa-solid fa-newspaper" style="margin-right:5px;"></i>Tin tức</a></li>
        <li><a href="index.php?quanly=lienhe"><i class="fa-solid fa-phone" style="margin-right:5px;"></i></i>Liên hệ</a></li>
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
            <li><a href="index.php?dangxuat=1"><i class="fa-solid fa-right-from-bracket" style="margin-right:5px;"></i>Đăng xuất</a></li>
        <?php
        } else {
        ?>
            <li><a href="index.php?quanly=dangky"><i class="fa-solid fa-right-to-bracket" style="margin-right:5px;"></i>Đăng ký</a></li>
        <?php
        }
        ?>
    </ul>
    <form id="search-form" action="index.php?quanly=timkiem" method="POST">
        <input id="search-inp" type="text" placeholder="Tìm kiếm sản phẩm...." name="key">
        <input id="search-btn" type="submit" name="timkiem" value='Tìm kiếm'>
    </form>
</div>
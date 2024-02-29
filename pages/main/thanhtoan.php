<?php
    session_start();
    include("../../admin/config/connect.php");
    $id_kh = $_SESSION['id_kh'];
    $order = rand(0,9999); //Tao ngau nhien ma don hang
    $insert_cart = "INSERT INTO giohang(id_kh, id_donhang, cart_status) VALUE('".$id_kh."','".$order."',1)";
    $query_giohang = mysqli_query($conn,$insert_cart);
    if($query_giohang){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_detail = "INSERT INTO chitietdonhang(id_sanpham, id_donhang, soluongmua) VALUE('".$id_sanpham."','".$order."','".$soluong."')";
            mysqli_query($conn,$insert_detail);
        }
    }
    unset($_SESSION['cart']);
    header("Location:../../index.php?quanly=camon");

?>

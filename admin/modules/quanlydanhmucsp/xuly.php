<?php
    include('../../config/connect.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if (isset($_POST['themdanhmuc'])){

        $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
        mysqli_query($conn, $sql_them);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($conn, $sql_update);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_delete = "DELETE FROM danhmuc WHERE id_danhmuc ='".$id."'";
        mysqli_query($conn, $sql_delete);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }
?>
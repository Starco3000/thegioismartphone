<?php
    include('../../config/connect.php');

    $tensp = $_POST['tensp'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
    //Xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $tomtat = $_POST['tomtat'];
    $mota = $_POST['mota'];
    $tinhtrang = $_POST['tinhtrang'];
    $danhmuc = $_POST['danhmuc'];
    
    if (isset($_POST['themsanpham'])){
        //Them
        $sql_them = "INSERT INTO sanpham(tensp,masp,giasp,soluong,hinhanh,tomtat,mota,tinhtrang,id_danhmuc) VALUE 
        ('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$mota."','".$tinhtrang."','".$danhmuc."')";
        
        mysqli_query($conn, $sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlysanpham&query=them");

    }elseif(isset($_POST['suasanpham'])){
        //Sua
        if($hinhanh != ''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            
            $sql_update = "UPDATE sanpham SET tensp='".$tensp."', masp='".$masp."', giasp='".$giasp."', 
            soluong='".$soluong."', hinhanh='".$hinhanh."', tomtat='".$tomtat."', mota='".$mota."', 
            tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
            //Xoa hinh anh cu
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }

        }else{
            $sql_update = "UPDATE sanpham SET tensp='".$tensp."', masp='".$masp."', giasp='".$giasp."', 
            soluong='".$soluong."', tomtat='".$tomtat."', mota='".$mota."', 
            tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($conn, $sql_update);
        header("Location:../../index.php?action=quanlysanpham&query=them");
    }else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_delete = "DELETE FROM sanpham WHERE id_sanpham ='".$id."'";
        mysqli_query($conn, $sql_delete);
        header("Location:../../index.php?action=quanlysanpham&query=them");
    }
?>
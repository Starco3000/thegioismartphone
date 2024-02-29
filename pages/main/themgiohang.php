<?php
    session_start();
    include('../../admin/config/connect.php');

    //Them so luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong'] <= 9){
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("Location:../../index.php?quanly=giohang");
    }

    //Tru so luong
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong'] > 1){
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("Location:../../index.php?quanly=giohang");
    }

    //Xoa san pham
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        // session_destroy();
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
        $_SESSION['cart'] = $product;
        header("Location:../../index.php?quanly=giohang");  
        }
         
    }
    //Xoa tat ca
    if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
        unset($_SESSION['cart']);
        header("Location:../../index.php?quanly=giohang");
    }
    //Them san pham vao gio hang
    if(isset($_POST['themgiohang'])){
        //session_destroy();
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_pro = array(array('tensp' => $row['tensp'], 'id'=>$id,'soluong'=>$soluong,'giasp'=>$row['giasp'],
            'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
            //Kiem tra gio hang hien tai
            if(isset($_SESSION['cart'])){
                $found = false;
                //Neu du lieu trung
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id'] == $id){
                        $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $found = true;
                    }else{
                        //Neu du lieu khong trung
                        $product[] = array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    }
                }
                if($found == false){
                    //Lien ket du lieu voi product (Ket hop du lieu neu san pham bi trung)
                    $_SESSION['cart'] = array_merge($product,$new_pro);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new_pro;
            }
        }
        header("Location:../../index.php?quanly=giohang");
        // print_r($_SESSION['cart']);
    }
?>
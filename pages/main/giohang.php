
<!-- Hien thi Gio hang: xin chao <hovaten> -->
<p id="cart-title">Giỏ hàng - 
<?php
    if(isset($_SESSION['dangky'])){
        echo 'Xin chào: '.'<span style="color: red">'.$_SESSION['dangky'].'</span>';
        
    }
?>
</p>

<!-- Trang gio hang -->
<table id="cart-table" style="width:100%;text-align: center;border-collapse: collapse;" border="0">
    <tr id="cart-header">
        <th>Id</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
    if(isset($_SESSION['cart'])){
        $i=0;
        $tongbill = 0;
        foreach($_SESSION['cart'] as $cart_item){
            $togntien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongbill += $togntien;
            $i++;

    ?>
    <tr class="product-row">
        <td><?php echo $i ?></td>
        <td><?php echo $cart_item['masp'];?></td>
        <td><?php echo $cart_item['tensp'];?></td>
        <td><img style="width:150px" src="admin/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'];?>"></td>
        <td>
            
            <a style="text-decoration: none; " href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-regular fa-plus"></i></a>
            <?php echo $cart_item['soluong'];?>
            <a style="text-decoration: none; "href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>

        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.').'VND';?></td>
        <td><?php echo number_format($togntien,0,',','.').'VND';?></td>
        <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
    </tr>
    <?php
        }
    ?>
        <tr>
            <td id="table-footer" colspan="8">
                <p style="float: left; font-weight: bolder;">Tổng hóa đơn: <?php echo number_format($tongbill,0,',','.').'VND' ?></p>
                <p style="float: right; font-weight: bolder; text-decoration: none;"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
                <!-- func dat hang -->
                <!-- <div style="clear: both;"></div> -->
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                    <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
                <?php
                }else{
                ?>
                    <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                <?php
                }
                ?>
            </td>
        </tr>
    <?php
    }else{
    ?>
    <tr>
        <td colspan="8"><p>Hiện tại giỏ hàng đang trống</p></td>
    </tr>
    <?php
    }
    ?>
</table>
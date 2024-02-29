<p>Liệt kê đơn hàng</p>
<?php
    $sql_lietke_dh = "SELECT * FROM giohang, tbl_dangky WHERE giohang.id_kh=tbl_dangky.id_dangky ORDER BY giohang.id_giohang DESC";
    $query_lietke_dh = mysqli_query($conn, $sql_lietke_dh);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table id="list-product" style="width:100%" border="0" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
    ?>
    <tr>
        <td style="text-align: center;height:50px;"><?php echo $i ?></td>
        <td style="text-align: center;height:50px;"><?php echo $row['id_donhang'] ?></td>
        <td style="text-align: center;height:50px;"><?php echo $row['tenkh'] ?></td>
        <td style="text-align: center;height:50px;"><?php echo $row['diachi'] ?></td>
        <td style="text-align: center;height:50px;"><?php echo $row['email'] ?></td>
        <td style="text-align: center;height:50px;"><?php echo $row['dienthoai'] ?></td>
        <td style="text-align: center;height:50px;">
            <?php if($row['cart_status'] == 1){
                
                echo '<a href="modules/quanlydonhang/xuly.php?code= '.$row['id_donhang'].'">Đơn hàng mới</a>';
            }
            else{
                echo 'Đã xem';
            }
            ?>
        </td>
        <td style="text-align: center;height:50px;">
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['id_donhang']?>">Xem đơn hàng</a>  
        </td>
    </tr>
    <?php
    }
    ?>

</table>
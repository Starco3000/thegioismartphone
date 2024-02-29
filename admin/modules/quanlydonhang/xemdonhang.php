<p>Xem đơn hàng</p>
<?php
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM chitietdonhang,sanpham WHERE chitietdonhang.id_sanpham=sanpham.id_sanpham AND 
    chitietdonhang.id_donhang='".$code."' ORDER BY chitietdonhang.id_chitietdonhang DESC";
    $query_lietke_dh = mysqli_query($conn, $sql_lietke_dh);
?>
<table style="width:100%" border=1 style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Tổng tiền</th>
        
    </tr>
    <?php
    $i = 0;
    $tonghoadon = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
        $tongbill = $row['giasp']*$row['soluongmua'];
        $tonghoadon += $tongbill;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['id_donhang'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').' VND' ?></td>
        <td><?php echo number_format($row['giasp']*$row['soluongmua'],0,',','.').' VND' ?></td>
        
    </tr>
    <?php
    }
    ?>
    <tr>
        <th colspan ="6">
            <p style="float:left;">Tổng hóa đơn: <?php echo number_format($tonghoadon,0,',','.').' VND' ?></p>
        </th>
    </tr>

</table>
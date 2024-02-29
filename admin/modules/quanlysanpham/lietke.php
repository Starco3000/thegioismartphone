<?php
    $sql_lietke_sp = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($conn, $sql_lietke_sp);
?>
<p>Liệt kê sản phẩm</p>
<table id="list-product" style="width:100%" border="0" style="border-collapse: collapse;" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Mã sp</th>
        <th>Tóm tắt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
    ?>
    <tr>
        <td style="text-align: center;"><?php echo $i ?></td>
        <td style="text-align: center;"><?php echo $row['tensp'] ?></td>
        <td style="text-align: center; height: 200px;"><img style=" height:150px" src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>"></td>
        <td style="text-align: center;"><?php echo $row['giasp'] ?></td>
        <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
        <td style="text-align: center;"><?php echo $row['tendanhmuc'] ?></td>
        <td style="text-align: center;"><?php echo $row['masp'] ?></td>
        <td style="text-align: center;"><?php echo $row['tomtat'] ?></td>
        <td style="text-align: center;"><?php if($row['tinhtrang'] == 1){
            echo 'Còn hàng';
        }else{
            echo 'Hết hàng';
        }
        ?>
        </td>
        <td style="text-align: center;">
            <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | 
            <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa </a>
        </td>
    </tr>
    <?php
    }
    ?>

</table>
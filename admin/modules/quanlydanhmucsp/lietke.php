<?php
    $sql_lietke = "SELECT * FROM danhmuc ORDER BY thutu DESC";
    $query_lietke = mysqli_query($conn, $sql_lietke);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke)){
        $i++;
    ?>
    <tr>
        <td style="text-align:center;"><?php echo $i ?></td>
        <td style="text-align:center;"><?php echo $row['tendanhmuc'] ?></td>
        <td style="text-align:center;"><?php echo $row['thutu'] ?></td>
        <td style="text-align:center;">
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa </a>
        </td>
    </tr>
    <?php
    }
    ?>

</table>
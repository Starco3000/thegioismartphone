<?php
    $sql_update = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_update = mysqli_query($conn, $sql_update);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="70%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while ($dong = mysqli_fetch_array($query_update)){
        ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" ></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr >
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
        <?php
        }
        ?>
  </form>
</table>
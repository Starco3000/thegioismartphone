<link rel="stylesheet" href="../../../css/style.css">
<h1 style="margin-bottom: 10px;">Thêm sản phẩm</h1>
<table id="add-product" border="0" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensp" ></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" ></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp" ></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" ></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" ></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" rows="10"  style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea name="mota" rows="10"  style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td><select name="danhmuc" >
                <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                <?php
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><select name="tinhtrang" >
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng</option>
                </select>
            </td>
        </tr>
        <tr >
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
  </form>
</table>
<?php
    $sql_update_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_update_sp = mysqli_query($conn, $sql_update_sp);
?>
<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <?php
    while($row = mysqli_fetch_array($query_update_sp)){
    ?>
    <form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensp'] ?>"name="tensp" ></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" value="<?php echo $row['masp'] ?>"name="masp" ></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp" ></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" ></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" >
            <img style=" height:150px" src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
            </td>

        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" rows="10"  style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><textarea name="mota" rows="10"  style="resize: none"><?php echo $row['mota'] ?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td><select name="danhmuc" >
                <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
                ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                <?php
                    }else{
                ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                <?php       
                    }
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><select name="tinhtrang" >
                    <?php
                        if($row['tinhtrang'] == 1){
                    ?>
                    <option value="1" selected>Còn hàng</option>
                    <option value="0">Hết hàng</option>
                    <?php
                    }else{
                    ?>
                    <option value="1">Còn hàng</option>
                    <option value="0" selected>Hết hàng</option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr >
            <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>
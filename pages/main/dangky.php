<?php
    if(isset($_POST['dangky'])){
        $ten = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $pws = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($conn,"INSERT INTO tbl_dangky(tenkh,email,diachi,matkhau,dienthoai) VALUE('".$ten."','".$email."','".$diachi."','".$pws."','".$dienthoai."')");
        if($sql_dangky){
            echo '<p>Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $ten;
            
            $_SESSION['id_kh'] = mysqli_insert_id($conn);
            header("Loaction:index.php?quanly=giohang"); //chua the tro ve trang gio hang sua khi dang ky de dat hang
        }
    }
?>
<p id="regist-title">Đăng ký tài khoản</p>
<form action="" method="POST">
    <table class="table_dangky" border="0" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" size="50" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" size="50" name="email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" size="50" name="dienthoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" size="50" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" size="50" name="matkhau"></td>
        </tr>
        <tr>
            <td><input id="register-btn" type="submit" name="dangky" value="Đăng ký"></td>
            <td>Đã có tài khoản? Đi đến <a href="index.php?quanly=dangnhap">Đăng nhập</a></td>
        </tr>
    </table>
</form>
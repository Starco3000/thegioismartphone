<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $pws = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$pws."' LIMIT 1"; 
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkh'];
            $_SESSION['id_kh'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p> Mật khẩu hoặc Email không đúng</p>';
            
        }
    }
    // session_destroy();
?>
<form action=""  method="POST">
        <table style="border: 1px solid #939393; padding: 10px; border-radius: 5px;" class="table_login_user" border="0" style="text-align: center;border-collapse: collapse;">
            <tr>
                <td style="height: 50px; text-align:center;" colspan="2"><h3>ĐĂNG NHẬP</h3></td>
            </tr>
            <tr style="height: 50px;">
                <th style="width: 100px;">Username</th>
                <th><input class="login-inp" type="text" placeholder="Email...." name="email"></th>
            </tr>
            <tr>
                <th style="width: 100px;">Password</th>
                <th><input class="login-inp" type="password" placeholder="Password" name="password"></th>
            </tr>
            <tr style="height: 50px;">
                
                <th colspan="2"><input id="login-btn" type="submit" name="dangnhap" value="Đăng nhập"></th>
            </tr>
        </table>
    </form>
<?php
    session_start();
    include("config/connect.php");
    if(isset($_POST['login'])){
        $tk_admin = $_POST['username'];
        $pws_admin = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$tk_admin."' AND password='".$pws_admin."' LIMIT 1"; 
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['login'] = $tk_admin;
            header("Location:index.php");
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại")</script>';
            header("Location:login.php");
        }
    }
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eaeaea;
        }
        .wrapper-login {
            width: 300px;
            margin: 50px auto;
            background-color: white;
        }
        table.table-login {
            width: 100%;
        }
        table.table-login tr td {
            padding: 6px;
        }
        #login-btn{
            all: unset;
            padding: 5px 10px;
            border-radius: 2px;
            background-color: #eaeaea;
            cursor: pointer;
            font-size: 14px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="wrapper-login">
    <form action="" autocomplete="off" method="POST">
        <table class="table-login" border="1" style="text-align: center;border-collapse: collapse;">
            <tr>
                <td colspan="2"><h3>ADMIN LOGIN</h3></td>
            </tr>
            <tr>
                <td>Admin Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                
                <td colspan="2"><input id="login-btn" type="submit" name="login" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

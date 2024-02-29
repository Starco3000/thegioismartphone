<!-- dang nhap de vao trang index -->
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/styles_admin.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h3 class="admin-title">Welcome to Admin Page</h3>
    <div class="wapper">
        <?php
            include("config/connect.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            // include("modules/footer.php");
        ?>
    </div>
    <?php
    include("../pages/footer.php");
    ?>
</body>
</html>
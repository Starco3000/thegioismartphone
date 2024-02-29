<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới smartphone</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/d720cf517f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include("pages/header.php");
    ?>
    <div class="wrapper">
        <?php
        session_start();
        // unset($_SESSION['dangky']);
        include("admin/config/connect.php");
        include("pages/menu.php");
        include("pages/main.php");
        ?>
    </div>
    <?php
    include("pages/footer.php");
    ?>
</body>

</html>
<!-- Ngan khong cho vao thang trang index ma phai thong qua dang nhap -->
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['login']);
        header("Location:login.php");
    }
?>
<p style="margin-bottom: 50px;"><a href="index.php?dangxuat=1">Đăng xuất: <?php if(isset($_SESSION['login.php'])){
        echo $_SESSION['login'];
    } ?></a></p>
<?php
    $serverName="localhost";
    $userName= "root";
    $pwd= "";
    $name= "thegioismartphone";

    $conn = new mysqli($serverName, $userName, $pwd,$name);

    if ($conn->connect_errno){
        echo "Kết nối thất bại" . $conn->connect_error;
        exit();
    }
?>
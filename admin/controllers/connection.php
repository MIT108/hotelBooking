<?php
session_start();
$dbName = "hotel";
$host = "localhost";
$password = "";
$name = "root";

$conn = mysqli_connect($host, $name, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    if(isset($_SESSION['authUser'])){
        $User = $_SESSION['authUser'];
    }else{
        header("Location: login.php");
    }
}

?>
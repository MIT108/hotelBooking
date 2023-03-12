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
    if(isset($_SESSION['authCustomer'])){
        $Customer = $_SESSION['authCustomer'];
    }
}
if (isset($_GET['logout'])) {
    unset($_SESSION['authCustomer']);
    echo "<script>
        alert('Log out successful');
            window.location.replace('index.php');
        </script>";
}
?>
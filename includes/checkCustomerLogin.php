<?php
if(isset($_SESSION['authCustomer'])){
    $Customer = $_SESSION['authCustomer'];
}else{
    header("Location: index.php");
}
?>
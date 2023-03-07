<?php
require("connection.php");
require("functions.php");

$id = $User['id'];
$reservationsQuery = "SELECT * FROM reservations WHERE hotel_id = $id";
$res = $conn->query($reservationsQuery);
$reservations = [];


while($row = $res->fetch_assoc()){
    $reservation['reservation'] = $row;
    $customerQuery = "SELECT * FROM customers WHERE id = ".$row['customer_id']."";
    $cus = $conn->query($customerQuery);
    $reservation['customer'] = $cus->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = ".$row['room_id']."";
    $ro = $conn->query($roomQuery);
    $reservation['room'] = $ro->fetch_assoc();
    array_push($reservations, $reservation );
}

if(isset($_GET['changeStatus'])){
    $status = $_GET['status'];
    $id = $_GET['changeStatus'];
    $sql = "UPDATE reservations SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Status updated";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }
    echo "<script>
        window.location.replace('reservations.php');
    </script>";
}
?>
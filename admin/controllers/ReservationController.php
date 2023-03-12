<?php
require("connection.php");
require("functions.php");

$id = $User['id'];
$reservationsQuery = "SELECT * FROM reservations WHERE hotel_id = $id AND status != 'pending'";
$preservationsQuery = "SELECT * FROM reservations WHERE hotel_id = $id AND status = 'pending'";
$res = $conn->query($reservationsQuery);
$pres = $conn->query($preservationsQuery);
$reservations = [];
$pendingReservations = [];
$message = "";


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


while($row = $pres->fetch_assoc()){
    $pendingReservation['reservation'] = $row;
    $customerQuery = "SELECT * FROM customers WHERE id = ".$row['customer_id']."";
    $cus = $conn->query($customerQuery);
    $pendingReservation['customer'] = $cus->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = ".$row['room_id']."";
    $ro = $conn->query($roomQuery);
    $pendingReservation['room'] = $ro->fetch_assoc();
    array_push($pendingReservations, $pendingReservation );
}

if(isset($_GET['changeStatus'])){
    $status = $_GET['status'];
    $id = $_GET['changeStatus'];
    $sql = "UPDATE reservations SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $message = "Status updated";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
    echo "<script>
    alert('$message');
        window.location.replace('pendingReservations.php');
    </script>";
}

if (isset($_GET['freeRoom'])) {
    $status = 'active';
    $id = $_GET['freeRoom'];
    $rid = $_GET['reservation'];
    $sql = "UPDATE rooms SET status='$status' WHERE id=$id";
    $rsql = "UPDATE reservations SET freeRoom=1 WHERE id=$rid";

    if ($conn->query($sql) === TRUE && $conn->query($rsql) === TRUE) {
        $message = "Status updated";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
    echo "<script>
    alert('$message');
        window.location.replace('reservations.php');
    </script>";
    
}
?>
<?php
require("connection.php");
require("functions.php");

$id = $Customer['id'];
$reservationsQuery = "SELECT * FROM reservations WHERE customer_id = $id";
$res = $conn->query($reservationsQuery);
$reservations = [];
while($row = $res->fetch_assoc()){
    $reservation['reservation'] = $row;
    $hotelQuery = "SELECT * FROM users WHERE id = ".$row['hotel_id']."";
    $hot = $conn->query($hotelQuery);
    $reservation['hotel'] = $hot->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = ".$row['room_id']."";
    $ro = $conn->query($roomQuery);
    $reservation['room'] = $ro->fetch_assoc();
    array_push($reservations, $reservation );
}
?>
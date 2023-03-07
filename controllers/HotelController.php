<?php
require("connection.php");
require("functions.php");

$hotelsQuery = "SELECT * FROM users WHERE type= 'hotel'";
$hotels = $conn->query($hotelsQuery);

$rooms = null;

if(isset($_GET['hotel_id'])){
    $hotel_id = $_GET['hotel_id'];
    $roomsQuery = "SELECT * FROM rooms WHERE hotel_id = $hotel_id";
    $rooms = $conn->query($roomsQuery);
    
}
$room = null;

if(isset($_GET['room_id'])){
    $id = $_GET['room_id'];
    $roomQuery = "SELECT * FROM rooms WHERE id = $id";
    $room = $conn->query($roomQuery);
    $room = $room->fetch_assoc();
    if(!$room){
        echo "<script>
            window.location.replace('index.php');
        </script>";
    }
}
 
?>
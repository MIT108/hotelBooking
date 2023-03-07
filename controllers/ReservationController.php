<?php
require("connection.php");
require("functions.php");

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

if(isset($_POST['make_reservation'])){
    $check_in = $_POST['check_in'];
    $num_night = $_POST['num_night'];
    $num_room = $_POST['num_room'];
    $num_people = $_POST['num_people'];
    $room_id = $_POST['room_id'];
    $motive = $_POST['motive'];
    $customer_id = $_POST['customer_id'];
    $hotel_id = $_POST['hotel_id'];
    $sql = "INSERT INTO reservations (hotel_id, customer_id, room_id, check_in, num_night, num_room, num_people, status,
    motive)
    VALUES ($hotel_id, $customer_id, $room_id, '$check_in', '$num_night', '$num_room', '$num_people', 'pending',
    '$motive')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Reservation made successfully";
        echo "<script>
            window.location.replace('roomDetail.php?room_id=$room_id');
        </script>";
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
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
$reservationCheckout = [];
if(isset($_GET['id'])){
    $res_id = $_GET['id'];
    $reservationQuery = "SELECT * FROM reservations WHERE id = $res_id";
    $res = $conn->query($reservationQuery);
    $res = $res->fetch_assoc();
    $reservationCheckout['reservation'] = $res;
    $hotelQuery = "SELECT * FROM users WHERE id = ".$res['hotel_id']."";
    $cus = $conn->query($hotelQuery);
    $reservationCheckout['hotel'] = $cus->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = ".$res['room_id']."";
    $ro = $conn->query($roomQuery);
    $reservationCheckout['room'] = $ro->fetch_assoc();
}

if(isset($_POST['checkout'])){
    var_dump($_POST);
    die();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $payment_method = $_POST['payment_method'];
    $payment_number = $_POST['payment_number'];
    $charge = $_POST['charge'];
    $discount = $_POST['discount'];
    $payed_amount = $_POST['payed_amount'];
    $customer_id = $_POST['customer_id'];
    $hotel_id = $_POST['hotel_id'];
    $room_id = $_POST['room_id'];

}

?>
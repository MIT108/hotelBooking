<?php
require "connection.php";
require "functions.php";


if (!isset($_SESSION['authCustomer'])) {
    echo "<script>
        alert('Login before reserving');
        window.location.replace('login.php');
    </script>";
}

$room = null;
$id = $Customer['id'];
$reservationsQuery = "SELECT * FROM reservations WHERE customer_id = $id AND status != 'pending'";
$preservationsQuery = "SELECT * FROM reservations WHERE customer_id = $id AND status = 'pending'";
$pres = $conn->query($preservationsQuery);
$res = $conn->query($reservationsQuery);
$reservations = [];
$pendingReservations = [];
$message = "";
while ($row = $res->fetch_assoc()) {
    $reservation['reservation'] = $row;
    $hotelQuery = "SELECT * FROM users WHERE id = " . $row['hotel_id'] . "";
    $hot = $conn->query($hotelQuery);
    $reservation['hotel'] = $hot->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = " . $row['room_id'] . "";
    $ro = $conn->query($roomQuery);
    $reservation['room'] = $ro->fetch_assoc();
    array_push($reservations, $reservation);
}
while ($row = $pres->fetch_assoc()) {
    $pendingReservation['reservation'] = $row;
    $hotelQuery = "SELECT * FROM users WHERE id = " . $row['hotel_id'] . "";
    $hot = $conn->query($hotelQuery);
    $pendingReservation['hotel'] = $hot->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = " . $row['room_id'] . "";
    $ro = $conn->query($roomQuery);
    $pendingReservation['room'] = $ro->fetch_assoc();
    array_push($pendingReservations, $pendingReservation);
}

if (isset($_GET['room_id'])) {
    $id = $_GET['room_id'];
    $roomQuery = "SELECT * FROM rooms WHERE id = $id";
    $room = $conn->query($roomQuery);
    $room = $room->fetch_assoc();
    if (!$room) {
        echo "<script>
            window.location.replace('index.php');
        </script>";
    }
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


if (isset($_POST['make_reservation'])) {
    $check_in = $_POST['check_in'];
    $num_night = $_POST['num_night'];
    $num_room = $_POST['num_room'];
    $num_people = $_POST['num_people'];
    $room_id = $_POST['room_id'];
    $motive = $_POST['motive'];
    $customer_id = $_POST['customer_id'];
    $hotel_id = $_POST['hotel_id'];
    $body = "<h1>Your reservation was send successfully</h1>
    <h3>Checkin date : $check_in</h3>
    <h5>Number of night : $num_night</h5>
    <h5>Number of rooms : $num_room</h5>
    <h5>Number of People : $num_people</h5>
    <h5>Motive : $motive</h5>";
    // if (sendMail($Customer['fname']." ".$Customer['lname'], $Customer['email'], "Reservation Send", $body)) {
    if (true) {
        $sql = "INSERT INTO reservations (hotel_id, customer_id, room_id, check_in, num_night, num_room, num_people, status,
            motive)
            VALUES ($hotel_id, $customer_id, $room_id, '$check_in', '$num_night', '$num_room', '$num_people', 'pending',
            '$motive')";
        if (mysqli_query($conn, $sql)) {
            $message = "Reservation made successfully";
            echo "<script>
                alert('$message');
                    window.location.replace('roomDetail.php?room_id=$room_id');
                </script>";
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
        $message = "Connection Error";
    }
    echo "<script>
    alert('$message');
    </script>";
}
$reservationCheckout = [];
if (isset($_GET['id'])) {
    $res_id = $_GET['id'];
    $reservationQuery = "SELECT * FROM reservations WHERE id = $res_id";
    $res = $conn->query($reservationQuery);
    $res = $res->fetch_assoc();
    $reservationCheckout['reservation'] = $res;
    $hotelQuery = "SELECT * FROM users WHERE id = " . $res['hotel_id'] . "";
    $cus = $conn->query($hotelQuery);
    $reservationCheckout['hotel'] = $cus->fetch_assoc();
    $roomQuery = "SELECT * FROM rooms WHERE id = " . $res['room_id'] . "";
    $ro = $conn->query($roomQuery);
    $reservationCheckout['room'] = $ro->fetch_assoc();
}

if (isset($_POST['checkout'])) {
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
    $reservation_id = $_POST['reservation_id'];

    $body = "<h1>Your Checkout was made successfully on the reservation $reservation_id</h1>
    <h3>Name : $fname $lname</h3>
    <h3>Phone : $phone</h3>
    <h3>Address : $address</h3>
    <h3>Email : $email</h3>
    <h3>Country : $country</h3>
    <h3>City : $city</h3>
    <h3>Zip : $zip</h3>
    <h3>Payment Method : $payment_method</h3>
    <h3>Payment Number : $payment_number</h3>
    <h3>Charge : $charge</h3>
    <h3>Discount : $discount</h3>
    <h3>Payed Amount : $payed_amount</h3>";
    // if (sendMail($fname." ".$lname, $email, "Checkout Send", $body)) {
    if (true) {

        $sql = "INSERT INTO checkouts (fname, lname, phone, address, email, country, city, zip, payment_method, payment_number,
    charge, discount, payed_amount, customer_id, hotel_id, room_id, reservation_id) VALUES('$fname', '$lname', '$phone', '$address', '$email',
    '$country', '$city', '$zip', '$payment_method', '$payment_number', '$charge', '$discount', '$payed_amount', $customer_id, $hotel_id, $room_id, $reservation_id)";

        if (mysqli_query($conn, $sql)) {
            $sql = "UPDATE reservations SET status='completed', check_out=1 WHERE id=$reservation_id";
            $rsql = "UPDATE rooms SET status='inactive' WHERE id=$room_id";

            if ($conn->query($sql) === true  && $conn->query($rsql) === TRUE) {
                $message = "Status updated";
                echo "<script>
                    alert('$message');
                        window.location.replace('checkouts.php');
                    </script>";
            } else {
                $message = "Error updating record: " . $conn->error;
            }
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
        $message = "Connection Error";
    }
    echo "<script>
    alert('$message');
    </script>";
}

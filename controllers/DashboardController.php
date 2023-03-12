<?php
require "connection.php";
require "functions.php";

$id = $Customer['id'];
$reservationsQuery = "SELECT * FROM reservations WHERE customer_id = $id LIMIT 3";
$res = $conn->query($reservationsQuery);
$reservations = [];
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

if (isset($_POST['contact_us'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $question = $_POST['question'];

    $body = "<h1>New Question</h1>
    <h3>From : </h3>
    <h5>Name : $fname $lname</h5>
    <h5>Email : $email</h5>
    <h5>Phone : $phone</h5>
    <h5>Question : $question</h5>";
    // if (sendMail("Booking.com", "miendjemthierry01@gmail.com", "Qestion", $body)) {
    if (true) {

        $sql = "INSERT INTO contacts (fname, lname, email, phone, question) VALUES ('$fname', '$lname', '$email', '$phone', '$question')";
        if (mysqli_query($conn, $sql)) {
            $message = "Question send successfully";
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

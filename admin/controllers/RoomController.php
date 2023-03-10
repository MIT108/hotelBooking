<?php
require("connection.php");
require("functions.php");

$room = null;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $roomQuery = "SELECT * FROM rooms WHERE id = $id";
    $room = $conn->query($roomQuery);
    $room = $room->fetch_assoc();
    if(!$room){
        echo "<script>
            window.location.replace('rooms.php');
        </script>";
    }
}
$hotel_id = $User['id'];

$roomsQuery = "SELECT * FROM rooms WHERE hotel_id = $hotel_id";
$rooms = $conn->query($roomsQuery);

if (isset($_POST['add_room'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $num_beds = $_POST['num_beds'];
    $num_persons = $_POST['num_persons'];
    $about = $_POST['about'];
    $hotel_id = $_POST['hotel_id'];
    if(isset($_POST['parking'])){
        $parking = 1;
    }else{
        $parking = 0;
    }
    if(isset($_POST['wifi'])){
        $wifi = 1;
    }else{
        $wifi = 0;
    }
    if(isset($_POST['breakfast'])){
        $breakfast = 1;
    }else{
        $breakfast = 0;
    }
    if(isset($_POST['room_service'])){
        $room_service = 1;
    }else{
        $room_service = 0;
    }
    if(isset($_POST['pool'])){
        $pool = 1;
    }else{
        $pool = 0;
    }
    if(isset($_POST['reception'])){
        $reception = 1;
    }else{
        $reception = 0;
    }
    if(isset($_POST['gym'])){
        $gym = 1;
    }else{
        $gym = 0;
    }
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $nameQuery = "SELECT * FROM rooms WHERE name = '$name' AND hotel_id = $hotel_id";
    $nameResult = $conn->query($nameQuery);
    if ($nameResult->num_rows === 0) {
        $response1 = uploadFile("../images/rooms/", $_FILES['image1']);
        $response2 = uploadFile("../images/rooms/", $_FILES['image2']);
        $response3 = uploadFile("../images/rooms/", $_FILES['image3']);
        if($response1["status"] && $response2["status"] && $response3["status"]){
            $image1 = $response1['message'];
            $image2 = $response2['message'];
            $image3 = $response3['message'];
            $sql = "INSERT INTO rooms (hotel_id, name, location, price, num_beds, num_persons, about, parking, wifi, breakfast, room_service, pool, reception, gym, rating, review, status, image1, image2, image3)
            VALUES ($hotel_id, '$name', '$location', '$price', '$num_beds', '$num_persons', '$about', $parking, $wifi, $breakfast,
            $room_service, $pool, $reception, $gym, $rating, $review, 'active', '$image1', '$image2', '$image3')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['success'] = "Room Registered successfully";
            } else {
                $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else{
            $_SESSION['error'] = "Error while uploading images";
        }
    } else {
        $_SESSION['error'] = "Room name already exist";
    }

}
if(isset($_POST['change_image1'])){
    $room_id = $_POST['room_id'];
    $response = uploadFile("../images/rooms/", $_FILES['image1']);
    if ($response["status"]) {
        $image = $response['message'];
        $sql = "UPDATE rooms SET image1='$image' WHERE id=$room_id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Image updated";
        } else {
            $_SESSION['error'] = "Error updating record: " . $conn->error;
        }
        echo "<script>
            window.location.replace('viewRoom.php?id=$room_id');
        </script>";
    }
}
if(isset($_POST['change_image2'])){
    $room_id = $_POST['room_id'];
    $response = uploadFile("../images/rooms/", $_FILES['image2']);
    if ($response["status"]) {
        $image = $response['message'];
        $sql = "UPDATE rooms SET image2='$image' WHERE id=$room_id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Image updated";
        } else {
            $_SESSION['error'] = "Error updating record: " . $conn->error;
        }
        echo "<script>
            window.location.replace('viewRoom.php?id=$room_id');
        </script>";
    }

}
if(isset($_POST['change_image3'])){
    $room_id = $_POST['room_id'];
    $response = uploadFile("../images/rooms/", $_FILES['image3']);
    if ($response["status"]) {
        $image = $response['message'];
        $sql = "UPDATE rooms SET image3='$image' WHERE id=$room_id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Image updated";
        } else {
            $_SESSION['error'] = "Error updating record: " . $conn->error;
        }
        echo "<script>
            window.location.replace('viewRoom.php?id=$room_id');
        </script>";
    }
}

if(isset($_POST['update_room'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $num_beds = $_POST['num_beds'];
    $num_persons = $_POST['num_persons'];
    $about = $_POST['about'];
    $room_id = $_POST['room_id'];
    if(isset($_POST['parking'])){
        $parking = 1;
    }else{
        $parking = 0;
    }
    if(isset($_POST['wifi'])){
        $wifi = 1;
    }else{
        $wifi = 0;
    }
    if(isset($_POST['breakfast'])){
        $breakfast = 1;
    }else{
        $breakfast = 0;
    }
    if(isset($_POST['room_service'])){
        $room_service = 1;
    }else{
        $room_service = 0;
    }
    if(isset($_POST['pool'])){
        $pool = 1;
    }else{
        $pool = 0;
    }
    if(isset($_POST['reception'])){
        $reception = 1;
    }else{
        $reception = 0;
    }
    if(isset($_POST['gym'])){
        $gym = 1;
    }else{
        $gym = 0;
    }
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $id = $_POST['room_id'];

    $sql = "UPDATE rooms SET name='$name', location='$location', price='$price', num_beds='$num_beds', num_persons='$num_persons', about='$about', parking=$parking, wifi=$wifi,
    breakfast=$breakfast,
    room_service=$room_service, pool=$pool, reception=$reception, gym=$gym, rating=$rating, review=$review WHERE
    id=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Room updated";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }

    echo "<script>
        window.location.replace('viewRoom.php?id=$room_id');
    </script>";
}
?>
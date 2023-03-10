<?php
require("connection.php");
require("functions.php");

$hotelsQuery = "SELECT * FROM users WHERE type= 'hotel'";
$hotels = $conn->query($hotelsQuery);
$message = "";

if(isset($_POST['add_hotel'])){
    $emailQuery = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";
    $emailResult = $conn->query($emailQuery);
    if ($emailResult->num_rows === 0) {
        $response = uploadFile("../images/hotels/", $_FILES['image']);
        if($response["status"]){
            $password = randomString();
            $email = $_POST['email'];
            $body = "<h1>Account Created Successfully</h1><b>Email: $email</b><br /><b>Password: $password</b>";
            $password = md5($password);
            $image = $response['message'];
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $city = $_POST['city'];
            $star = $_POST['star'];
            if(sendMail($_POST['name'], $_POST['email'], "Account Created", $body)){
                $sql = "INSERT INTO users (name, email, contact, password, type, image, status, city, star) VALUES ('$name',
                '$email', '$contact', '$password', 'hotel', '$image', 'active', '$city', '$star' )";
                if (mysqli_query($conn, $sql)) {
                    $message = "Hotel Registered successfully";
                } else {
                    $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                $message = "Connection Error";
            }
        }else{
            $message = $response["message"];
        }
    } else {
        $message = "Email Already exist";
    }
    echo "<script>
        alert('$message')
        window.location.replace('hotels.php');
    </script>";
}

if(isset($_GET['changeStatus'])){
    $status = $_GET['status'];
    $id = $_GET['changeStatus'];
    $sql = "UPDATE users SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $message = "Status updated";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
    echo "<script>
        alert('$message')
        window.location.replace('hotels.php');
    </script>";
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $message = "Hotel Deleted";
    } else {
        $message = "Error deleting hotel: " . $conn->error;
    }
    echo "<script>
        alert('$message')
        window.location.replace('hotels.php');
    </script>";
}
?>
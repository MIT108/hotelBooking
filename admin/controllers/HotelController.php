<?php
require("connection.php");
require("functions.php");

$hotelsQuery = "SELECT * FROM users WHERE type= 'hotel'";
$hotels = $conn->query($hotelsQuery);

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
                    $_SESSION['success'] = "Hotel Registered successfully";
                } else {
                    $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                $_SESSION['error'] = "Connection Error";
            }
        }else{
            $_SESSION['error'] = $response["message"];
        }
    } else {
        $_SESSION['error'] = "Email Already exist";
    }
    echo "<script>
        window.location.replace('hotels.php');
    </script>";
}

if(isset($_GET['changeStatus'])){
    $status = $_GET['status'];
    $id = $_GET['changeStatus'];
    $sql = "UPDATE users SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Status updated";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }
    echo "<script>
        window.location.replace('hotels.php');
    </script>";
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Hotel Deleted";
    } else {
        $_SESSION['error'] = "Error deleting hotel: " . $conn->error;
    }
    echo "<script>
        window.location.replace('hotels.php');
    </script>";
}
?>
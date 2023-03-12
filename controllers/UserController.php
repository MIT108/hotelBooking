<?php
require "connection.php";
require "functions.php";
$message = "";
if (!isset($_SESSION['authCustomer'])) {
    echo "<script>
    alert('Authenticate First');
    window.location.replace('index.php');
    </script>";
}

if (isset($_POST['editProfile'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $id = $Customer['id'];
    $phone = $_POST['phone'];

    $sql = "UPDATE customers SET fname='$fname', lname='$lname', username='$username', phone='$phone' WHERE id=$id";

    if ($conn->query($sql) === true) {
        $_SESSION['authCustomer']['fname'] = $fname;
        $_SESSION['authCustomer']['lname'] = $lname;
        $_SESSION['authCustomer']['username'] = $username;
        $_SESSION['authCustomer']['phone'] = $phone;
        $message = "Profile updated";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
    echo "<script>
    alert('$message');
    window.location.replace('editProfile.php');
    </script>";
}

if (isset($_POST['change_image'])) {
    $user_id = $_POST['user_id'];
    $response = uploadFile("../images/hotels/", $_FILES['image']);
    if ($response["status"]) {
        $image = $response['message'];
        $sql = "UPDATE users SET image='$image' WHERE id=$user_id";

        if ($conn->query($sql) === true) {
            $message = "Image updated";
            $_SESSION['authUser']['image'] = $image;

        } else {
            $message = "Error updating record: " . $conn->error;
        }
    }
    echo "<script>
    alert('$messge');
    window.location.replace('profile.php');
    </script>";
}

if (isset($_POST['updatePassword'])) {
    $message = "";
    $oldPassword = $_POST['oldPassword'];
    $email = $_SESSION['authCustomer']['email'];
    $id = $_SESSION['authCustomer']['id'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    if ($password == $cPassword) {
        if ($password != $oldPassword) {
            $emailQuery = "SELECT * FROM customers WHERE email = '$email'";
            $emailResult = $conn->query($emailQuery);
            if ($emailResult->num_rows > 0) {
                $account = false;
                while ($row = $emailResult->fetch_assoc()) {
                    if (md5($oldPassword) === $row['password']) {
                        $account = true;
                    }
                }
                if ($account) {
                    $md5 = md5($password);
                    $sql = "UPDATE customers SET password='$md5' WHERE id=$id";

                    if ($conn->query($sql) === true) {
                        $message = "Password Changed";
                    } else {
                        $message = "Error updating record: " . $conn->error;
                    }

                } else {
                    $message = "The old password doest match";
                }
            } else {
                $message = "The old password doest match";
            }
        } else {
            $message = "The old password is the same as the new !";
        }
    } else {
        $message = "The 2 passwords doesnt match !";
    }
    echo "<script>
    alert('$message');
    window.location.replace('changePassword.php');
    </script>";
}

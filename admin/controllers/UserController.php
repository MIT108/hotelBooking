<?php
require "connection.php";
require "functions.php";
$message = "";

if (isset($_POST['updateProfile'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $star = $_POST['star'];

    $sql = "UPDATE users SET name='$name', city='$city', contact='$contact', star='$star' WHERE id=$id";

    if ($conn->query($sql) === true) {
        $_SESSION['authUser']['contact'] = $contact;
        $_SESSION['authUser']['city'] = $city;
        $_SESSION['authUser']['name'] = $name;
        $_SESSION['authUser']['star'] = $star;
        $message = "Profile updated";
    } else {
        $message = "Error updating record: " . $conn->error;
    }
    echo "<script>
    alert('$messge');
    window.location.replace('profile.php');
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
    $oldPassword = $_POST['oldPassword'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    if ($password == $cPassword) {
        if ($password != $oldPassword) {
            $emailQuery = "SELECT * FROM users WHERE email = '$email'";
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
                    $sql = "UPDATE users SET password='$md5' WHERE id=$id";

                    if ($conn->query($sql) === true) {
                        $message = "Password Changed";
                    } else {
                        $message = "Error updating record: " . $conn->error;
                    }

                } else {
                    $message = "The old password does't match";
                }
            } else {
                $message = "The old password does't match";
            }
        } else {
            $message = "The old password is the same as the new !";
        }
    } else {
        $message = "The 2 passwords doesn't match !";
    }
    echo "<script>
    alert('$messge');
    window.location.replace('profile.php');
    </script>";
}

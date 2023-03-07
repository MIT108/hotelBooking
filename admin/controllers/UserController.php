<?php
require("connection.php");
require("functions.php");

if(isset($_POST['updateProfile'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $star = $_POST['star'];

    $sql = "UPDATE users SET name='$name', city='$city', contact='$contact', star='$star' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['authUser']['contact'] = $contact;
        $_SESSION['authUser']['city'] = $city;
        $_SESSION['authUser']['name'] = $name;
        $_SESSION['authUser']['star'] = $star;
        $_SESSION['success'] = "Profile updated";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }
}

if(isset($_POST['updatePassword'])){
    $oldPassword = $_POST['oldPassword'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    if($password == $cPassword){
        if($password != $oldPassword){
            $emailQuery = "SELECT * FROM users WHERE email = '$email'";
            $emailResult = $conn->query($emailQuery);
            if ($emailResult->num_rows > 0) {
                $account = false;
                while($row = $emailResult->fetch_assoc()) {
                    if (md5($oldPassword) === $row['password']) {
                        $account = true;
                    }
                }
                if($account){
                    $md5 = md5($password);
                    $sql = "UPDATE users SET password='$md5' WHERE id=$id";

                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['success'] = "Password Changed";
                    } else {
                        $_SESSION['error'] = "Error updating record: " . $conn->error;
                    }

                }else{
                    $_SESSION['error'] = "The old password does't match";
                }
            } else {
                $_SESSION['error'] = "The old password does't match";
            }
        } else {
            $_SESSION['error'] = "The old password is the same as the new !";
        }
    } else {
        $_SESSION['error'] = "The 2 passwords doesn't match !";
    }
    // header("Location: password.php");
}


?>
<?php
session_start();
$dbName = "hotel";
$host = "localhost";
$password = "";
$name = "root";

$conn = mysqli_connect($host, $name, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

require('includes/includes_header.php');
require('controllers/functions.php');

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    if($password == $cPassword){
        $emailQuery = "SELECT * FROM customers WHERE email = '$email'";
        $emailResult = $conn->query($emailQuery);
        if ($emailResult->num_rows === 0) {
            $response = uploadFile("images/customers/", $_FILES['image']);
            if($response["status"]){
                $image = $response['message'];
                $password = md5($password);
                $body = "<h1>Account Created Successfully at booking</h1><b>To login click here:
                    http://localhost/hotel/login.php</b>";
                if(sendMail($fname." ".$lname, $email, "Account Created", $body)){
                    $sql = "INSERT INTO customers (fname, lname, username, email, phone, password, status, image) VALUES ('$fname',
                    '$lname',
                    '$username', '$email', '$phone', '$password', 'active', '$image' )";
                    if (mysqli_query($conn, $sql)) {
                        $_SESSION['success'] = "Account Registered successfully";
                        header("Location: login.php");
                    } else {
                        $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }else{
                    $_SESSION['error'] = "Connection Error";
                }
            }else{
                $_SESSION['error'] = $response["message"];
            }
        }else{
            $_SESSION['error'] = "This email already exist";
        }
    }else{
        $_SESSION['error'] = "The 2 password doesn't match";
    }

}

?>


<section class="l-area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="login-wrapper login-shadow bg-white">
            <div class="login-wrapper-flex">
                <div class="login-wrapper-thumb">
                    <img src="assets/img/single-page/login.jpg" alt="img">
                </div>
                <div class="login-wrapper-contents login-padding">
                    <h2 class="single-title"> Welcome! </h2>
                    <?php
                        if (isset($_SESSION['success'])) {
                        ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <?= $_SESSION['success'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                            unset($_SESSION['success']);
                        } else if (isset($_SESSION['error'])) {
                        ?>
                    <div class="alert alert-danger alert-dismissible show fade">
                        <?= $_SESSION['error'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                            unset($_SESSION['error']);
                        } ?>
                    <form class="login-wrapper-form custom-form padding-top-20" action="" enctype="multipart/form-data"
                        method="post">
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> Image </label>
                            <input class="form--control" type="file" name="image" required placeholder="Type User Name">
                        </div>
                        <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> First Name </label>
                                <input class="form--control" type="text" name="fname" required
                                    placeholder="Type First Name">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Last Name </label>
                                <input class="form--control" type="text" name="lname" required
                                    placeholder="Type Last Name">
                            </div>
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> User Name </label>
                            <input class="form--control" type="text" name="username" required
                                placeholder="Type User Name">
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> Email Address </label>
                            <input class="form--control" type="text" name="email" required placeholder="Type Email">
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> Phone Number </label>
                            <input class="form--control" type="tel" id="phone" required name="phone">
                        </div>
                        <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Create Password </label>
                                <input class="form--control" type="password" name="password" required minlength="8"
                                    placeholder="Type Password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Confirm Password </label>
                                <input class="form--control" type="password" name="cPassword" required
                                    placeholder="Confirm Password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-inline mt-4">
                            <input class="check-input" type="checkbox" id="check15" required>
                            <label class="checkbox-label" for="check15"> By creating an account, you agree to the <a
                                    class="color-one" href="javascript:void(0)"> terms of service </a> and <a
                                    class="color-one" href="javascript:void(0)"> Conditions </a>,
                                and <a class="color-one" href="javascript:void(0)"> privacy policy </a> </label>
                        </div>
                        <button class="submit-btn w-100 mt-4" name="register" type="submit"> Sign Up Now </button>
                        <span class="account color-light mt-3"> Already have an account? <a class="color-one"
                                href="login.php"> Login </a> </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="mouse-move mouse-outer"></div>
<div class="mouse-move mouse-inner"></div>

<?php
require('includes/includes_footer.php');
?>
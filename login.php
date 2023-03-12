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

$message = "";

if(isset($_POST['login'])){
    $emailQuery = "SELECT * FROM customers WHERE email = '" . $_POST['email'] . "'";
    $emailResult = $conn->query($emailQuery);
    if ($emailResult->num_rows > 0) {
        $account = false;
        while($row = $emailResult->fetch_assoc()) {
            if (md5($_POST['password']) === $row['password']) {
                $_SESSION['authCustomer'] = $row;
                $account = true;
                header("Location: index.php");
            }
        } 
        if(!$account){
            $message = "Account do not exist";
        }
    } else {
        $message = "Account do not exist";
    }
    
    echo "<script>
        alert('$message'); 
    </script>"; 
}

require('includes/includes_header.php');
?>


    <section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="assets/img/single-page/login.jpg" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Welcome! </h2>
                        <p class="sigle-para mt-2"> Login to Continue </p>
                        <form class="login-wrapper-contents-form custom-form" action="" method="post" >
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email </label>
                                <input class="form--control" type="email" name="email" required
                                    placeholder="Email">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Password </label>
                                <input class="form--control" type="password" name="password" required placeholder="Type Password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <button class="submit-btn w-100 mt-4" name="login" type="submit"> Sign In Now </button>
                            <span class="account color-light mt-3"> Don't have an account? <a class="color-one"
                                    href="signup.php"> SignUp Now </a> </span>
                        </form>
                        <div class="single-checkbox mt-3">
                            <div class="checkbox-inline">
                                <input class="check-input" type="checkbox" id="check15">
                                <label class="checkbox-label" for="check15"> Remember Me </label>
                            </div>
                            <!-- <div class="forgot-password">
                                <a href="forgot_password.html" class="forgot-btn color-one"> Forgot Password </a>
                            </div> -->
                        </div>
                        <div class="login-bottom-contents">
                            <div class="or-contents mb-3">
                                <span class="or-contents-para"> Or </span>
                            </div>
                            <div class="login-others">
                                <div class="login-others-single">
                                    <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                        <img src="assets/img/single-page/google.png" alt="">
                                        <span class="login-para"> Sign In With Google </span>
                                    </a>
                                </div>
                                <div class="login-others-single">
                                    <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                        <img src="assets/img/single-page/facebook.png" alt="">
                                        <span class="login-para"> Sign In With facebook </span>
                                    </a>
                                </div>
                            </div>
                        </div>
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
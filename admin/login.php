<!DOCTYPE html>
<html lang="en">
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


if(isset($_POST['login'])){
    $emailQuery = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";
    $emailResult = $conn->query($emailQuery);
    $message = "";
    if ($emailResult->num_rows > 0) {
        $account = false;
        while($row = $emailResult->fetch_assoc()) {
            if (md5($_POST['password']) === $row['password']) {
                $_SESSION['authUser'] = $row;
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

?>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="stylesheet" href="assets/css/pages/auth.css" />
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" /> -->
</head>

<body>
    <script src="assets/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">
                        Log in with your data that you entered during registration.
                    </p>

                    <form action="" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" required
                                name="email" />
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" required
                                placeholder="Password" />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <!-- <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" /> -->
                            <!-- <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label> -->
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit" name="login">
                            Log in
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <!-- <p class="text-gray-600">
                            Don't have an account?
                            <a href="auth-register.html" class="font-bold">Sign up</a>.
                        </p> -->
                        <!-- <p>
                            <a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>


</html>
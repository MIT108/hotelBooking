<?php
require('includes/includes_header.php');
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
                    <form class="login-wrapper-form custom-form padding-top-20" action="#">
                        <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> First Name </label>
                                <input class="form--control" type="text" name="name" placeholder="Type First Name">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Last Name </label>
                                <input class="form--control" type="text" name="name" placeholder="Type Last Name">
                            </div>
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> User Name </label>
                            <input class="form--control" type="text" placeholder="Type User Name">
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> Email Address </label>
                            <input class="form--control" type="text" name="email" placeholder="Type Email">
                        </div>
                        <div class="single-input mt-4">
                            <label class="label-title mb-3"> Phone Number </label>
                            <input class="form--control" type="tel" id="phone" name="phone">
                        </div>
                        <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Create Password </label>
                                <input class="form--control" type="password" name="name" placeholder="Type Password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Confirm Password </label>
                                <input class="form--control" type="password" name="name" placeholder="Confirm Password">
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-inline mt-4">
                            <input class="check-input" type="checkbox" id="check15">
                            <label class="checkbox-label" for="check15"> By creating an account, you agree to the <a
                                    class="color-one" href="javascript:void(0)"> terms of service </a> and <a
                                    class="color-one" href="javascript:void(0)"> Conditions </a>,
                                and <a class="color-one" href="javascript:void(0)"> privacy policy </a> </label>
                        </div>
                        <button class="submit-btn w-100 mt-4" type="submit"> Sign Up Now </button>
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
<?php
require "controllers/UserController.php";

require 'includes/includes_header.php';
require 'includes/navBar.php';
?>

    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Edit Profile </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                    class="breadcrumb-contents-list-item-link"> Home </a> </li>
                            <li class="breadcrumb-contents-list-item"> <a href="profile.html"
                                    class="breadcrumb-contents-list-item-link"> Profile </a> </li>
                            <li class="breadcrumb-contents-list-item"> Edit Profile </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <?php
                require "includes/dashboardSidebar.php"
                ?>
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    <div class="dashboard-reservation">
                        <div class="single-reservation bg-white base-padding">
                            <h3 class="single-reservation-title"> Edit Profile </h3>
                            <div class="custom--form dashboard-form">
                                <form action="" method="POST">
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> First Name </label>
                                            <input type="text" class="form--control" name="fname" required value="<?= $Customer['fname']?>" placeholder="First Name">
                                        </div>
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Last Name </label>
                                            <input type="text" class="form--control" name="lname" required value="<?= $Customer['lname']?>"  placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Username </label>
                                            <input type="text" class="form--control" name="username" required value="<?= $Customer['username']?>" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="dashboard-flex-input">
                                        <div class="dashboard-input mt-4">
                                            <label class="label-title"> Phone Number </label>
                                            <input type="text" class="form--control" name="phone" required value="<?= $Customer['phone']?>"  id="phone"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <button name="editProfile" type="submit" class="cmn-btn btn-bg-1"> Save Changes </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

require 'includes/footer.php';
require 'includes/includes_footer.php';
?>
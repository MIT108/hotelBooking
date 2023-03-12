<?php
require "controllers/DashboardController.php";

require('includes/includes_header.php');
require('includes/navBar.php');
?>
<div class="breadcrumb-area breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Contact Us </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-area pat-100 pab-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="contact-thumb">
                    <img src="assets/img/single-page/contact.jpg" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-wrapper contact-padding bg-white radius-20">
                    <div class="contact-contents">
                        <h4 class="contact-contents-title"> Get in touch </h4>
                        <p class="contact-contents-para mt-2"> Our friendly team would love to hear from you. </p>
                        <div class="contact-contents-form custom-form">
                            <form action="" method="POST" >
                                <div class="single-flex-input mt-4">
                                    <div class="single-input mt-4">
                                        <input type="text" class="form--control radius-5" name="fname" required placeholder="First Name">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input type="text" class="form--control radius-5" name="lname" required placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="single-input mt-4">
                                    <input type="email" class="form--control radius-5" name="email" required placeholder="Type Email">
                                </div>
                                <div class="single-input mt-4">
                                    <input type="tel" class="form--control radius-5" id="phone"  name="phone" required
                                        placeholder="Type Number">
                                </div>
                                <div class="single-input mt-4">
                                    <textarea class="form--control form-message radius-5" name="question" placeholder="Question" required ></textarea>
                                </div>
                                <button type="submit" name="contact_us" class="submit-btn radius-5"> Save Changes </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require('includes/footer.php');
require('includes/includes_footer.php');
?>
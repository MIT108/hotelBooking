<?php
require("controllers/ReservationController.php");

require('includes/includes_header.php');
require('includes/navBar.php');
?>

<div class="breadcrumb-area breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <?php
            require('admin/includes/alert.php');
            ?>
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Reservation </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> Reservation </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-area pat-100 pab-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-wrapper contact-padding bg-white radius-20">
                    <div class="contact-contents">
                        <h4 class="contact-contents-title"> Reserve now </h4>
                        <div class="contact-contents-form custom-form">
                            <form action="" method="post" >
                                <div class="single-flex-input mt-4">
                                    <div class="single-input mt-4">
                                        <input type="date" min="<?= date("Y-m-d") ?>" class="form--control radius-5" name="check_in" required placeholder="Check in date">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input type="number" min="1" class="form--control radius-5"  name="num_night" required placeholder="Number of Night ">
                                    </div>
                                </div>
                                <div class="single-flex-input mt-4">
                                    <div class="single-input mt-4">
                                        <input type="number" min="1" class="form--control radius-5" name="num_room"
                                            required placeholder="Number of Rooms">
                                    </div>
                                    <div class="single-input mt-4">
                                        <input type="number" min="1" class="form--control radius-5" name="num_people"
                                            required placeholder="Number of People">
                                    </div>
                                </div>
                                <div class="single-flex-input mt-4">
                                    <div class="single-input mt-4">
                                        <textarea class="form--control radius-5" name="motive"
                                            required placeholder="Reservation Motive"></textarea>
                                    </div>
                                </div>
                                <input name="room_id" value="<?= $room['id'] ?>" required hidden />
                                <input name="customer_id" value="<?= $Customer['id'] ?>" required hidden />
                                <input name="hotel_id" value="<?= $_GET['hotel_id'] ?>" required hidden />
                                <button type="submit" name="make_reservation" class="submit-btn radius-5">Reserve</button>
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
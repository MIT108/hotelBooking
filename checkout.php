<?php
require("controllers/ReservationController.php");

require('includes/includes_header.php');
require('includes/navBar.php');
if(!isset($_GET['id'])){
echo "<script>
    window.location.replace('index.php');
</script>";
}
?>
<div class="breadcrumb-area breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Checkout Details </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="Checkout-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <form method="post" action="confirmation.php" >
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="checkout-wrapper">
                        <div class="checkout-single bg-white radius-10">
                            <h4 class="checkout-title"> Booking Information </h4>
                            <div class="checkout-contents mt-3">
                                <div class="checkout-form custom-form">
                                    <form action="#">
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> First Name </label>
                                                <input class="form--control" type="text" name="fname" required
                                                    placeholder="Type First Name">
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Last Name </label>
                                                <input class="form--control" type="text" name="lname" required
                                                    placeholder="Type Last Name">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Mobile Number </label>
                                                <input class="form--control" id="phone" type="tel" name="phone" required
                                                    placeholder="Type Mobile Number">
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Email Address </label>
                                                <input class="form--control" type="email" name="email" required
                                                    placeholder="Type Email">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Address </label>
                                                <input class="form--control" type="text" name="address" required
                                                    placeholder="Type Address">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Country </label>
                                                <input class="form--control" type="text" name="country" required
                                                    placeholder="Type Country">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> City/Town </label>
                                                <input class="form--control" type="text" name="city" required
                                                    placeholder="Type City/Town">
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Zip Code </label>
                                                <input class="form--control" type="text" name="zip" required
                                                    placeholder="Type Zip Code ">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-single bg-white radius-10">
                            <h4 class="checkout-title"> Payment </h4>
                            <div class="checkout-contents mt-4">
                                <div class="custom-radio custom-radio-inline">
                                    <div class="custom-radio-single active">
                                        <input class="radio-input" type="radio" id="radio1" name="payment_method"
                                            value="OM" required checked="checked">
                                        <label for="radio1"> Orang Money</label>
                                    </div>
                                    <div class="custom-radio-single">
                                        <input class="radio-input" type="radio" name="payment_method" value="MoMo"
                                            required id="radio2">
                                        <label for="radio2"> MTN Mobile Money</label>
                                    </div>
                                </div>
                                <div class="checkout-form custom-form">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Phone Number </label>
                                            <input class="form--control input-padding-left" type="tel" id="phone"
                                                name="payment_number" required placeholder="Type Phone Number">
                                            <div class="input-icon"> <img src="assets/img/icons/card.svg" alt="Icon">
                                            </div>
                                        </div>
                                        <div class="guaranty-cancellation radius-10 mt-4">
                                            <h4 class="guaranty-cancellation-title"> Guarantee & Cancellation </h4>
                                            <p class="guaranty-cancellation-para"> Cancel 12 hours before checking-in
                                                time for a Free Cancellation. </p>
                                        </div>
                                        <div class="checkbox-wrap mt-4">
                                            <div class="checkbox-inline">
                                                <input class="check-input" type="checkbox" required id="agree">
                                                <label class="checkbox-label" for="agree"> I agree to the <a
                                                        href="javascript:void(0)">Terms & Conditions</a> of <a
                                                        href="javascript:void(0)">Beyond Hotels</a> </label>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sticky-top">
                        <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                            <div class="checkout-sidebar">
                                <h4 class="checkout-sidebar-title"> Booking Details </h4>
                                <div class="checkout-sidebar-contents">
                                    <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                        <li class="list"> <span class="regular"> Checking In </span> <span
                                                class="strong">
                                                <?= $reservationCheckout['reservation']['check_in'] ?> </span> </li>

                                        <li class="list"> <span class="regular"> Number of Rooms </span> <span
                                                class="strong">
                                                <?= $reservationCheckout['reservation']['num_room'] ?>
                                            </span> </li>
                                        <li class="list"> <span class="regular"> Total Stay </span> <span
                                                class="strong">
                                                <?= $reservationCheckout['reservation']['num_night'] ?>
                                                Nights </span> </li>
                                        <li class="list"> <span class="regular"> Number of Person </span> <span
                                                class="strong">
                                                <?= $reservationCheckout['reservation']['num_people'] ?>
                                                Person </span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                            <div class="checkout-sidebar">
                                <h4 class="checkout-sidebar-title"> Invoice </h4>
                                <div class="checkout-sidebar-contents">
                                    <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                        <li class="list"> <span class="regular"> Charge </span> <span class="strong">
                                                <?php $charge = $reservationCheckout['room']['price'] * $reservationCheckout['reservation']['num_room'] *
                                                $reservationCheckout['reservation']['num_night'];
                                            echo $charge; ?> FCFA </span> </li>
                                        <input name="charge" value="<?= $charge ?>" required hidden />
                                        <li class="list"> <span class="regular"> Discount </span> <span class="strong">
                                                <?php $discount = ($reservationCheckout['reservation']['num_room'] *
                                                $reservationCheckout['reservation']['num_night']
                                                * $reservationCheckout['reservation']['num_people']) / 10;
                                            echo $discount; ?> %</span> </li>
                                        <input name="discount" value="<?= $discount ?>" required hidden />
                                    </ul>
                                    <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                        <li class="list"> <span class="regular"> Total </span> <span
                                                class="strong color-one fs-20"> <?php $total = $charge - ($charge * $discount / 100);
                                            echo $total; ?> FCFA </span> </li>
                                        <input name="payed_amount" value="<?= $total ?>" required hidden />

                                        <input name="customer_id" value="<?= $reservationCheckout['reservation']['customer_id'] ?>" required hidden />
                                        <input name="hotel_id" value="<?= $reservationCheckout['reservation']['hotel_id'] ?>" required hidden />
                                        <input name="room_id" value="<?= $reservationCheckout['reservation']['room_id'] ?>" required hidden />

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="sticky-top">
                        <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                            <div class="checkout-sidebar">
                                <div class="btn-wrapper mt-4">
                                    <button type="submit" name="checkout" class="cmn-btn btn-bg-1 btn-small"> Pay &
                                        Confirm </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php

require('includes/footer.php');
require('includes/includes_footer.php');
?>
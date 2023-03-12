<?php
require "controllers/ReservationController.php";

require 'includes/includes_header.php';
require 'includes/navBar.php';
?>

    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container custom-container-one">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-contents">
                        <h4 class="breadcrumb-contents-title"> Dashboard </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                    class="breadcrumb-contents-list-item-link"> Home </a> </li>
                            <li class="breadcrumb-contents-list-item"> Dashboard </li>
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
                        <?php foreach ($reservations as $reservation) {?>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #<?=$reservation['reservation']['id']?> </span>
                                    </div>
                                    <?php if ($reservation['reservation']['status'] == 'pending') {?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                    </div>
                                    <?php } else if ($reservation['reservation']['status'] == 'accepted') {?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-accepted"> Accepted </a>
                                    </div>
                                    <?php } else if ($reservation['reservation']['status'] == 'cancelled') {?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-cancelled"> Cancelled </a>
                                    </div>
                                    <?php } else if ($reservation['reservation']['status'] == 'completed') {?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-completed"> Completed </a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="single-reservation-inner">
                                <div class="single-reservation-item">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> <?=$reservation['room']['name']?> </h5>
                                        <p class="single-reservation-name-para">
                                        <?=$reservation['room']['location']?>
                                        </p>
                                        <p class="single-reservation-name-para">
                                        <b>Motive</b> <?=$reservation['reservation']['motive']?>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Check in </span>
                                            <h5 class="single-reservation-details-title"><?=$reservation['reservation']['check_in']?></h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Check out </span>
                                            <h5 class="single-reservation-details-title"> <?php if ($reservation['reservation']['check_out'] == 0) {?>

                                                <div class="single-reservation-btn">
                                                    <a href="javascript:void(0)" class="dash-btn btn-cancelled"> No </a>
                                                </div>
                                            <?php } else {?>
                                            <div class="single-reservation-btn">
                                                <a href="javascript:void(0)" class="dash-btn btn-accepted"> Yes </a>
                                            </div>
                                            <?php }?> </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle">Night, Guests & Rooms </span>
                                            <h5 class="single-reservation-details-title">  <?=$reservation['reservation']['num_night']?> Nights,  <?=$reservation['reservation']['num_people']?> People, <?=$reservation['reservation']['num_room']?> Rooms
                                            </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Booked </span>
                                            <h5 class="single-reservation-details-title"> <?=$reservation['reservation']['created_at']?> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        <div class="single-reservation-content">
                                            <h5 class="single-reservation-content-title"> Total Bill </h5>
                                            <span class="single-reservation-content-price"> <?= $reservation['room']['price'] * $reservation['reservation']['num_room'] *
                                                $reservation['reservation']['num_night']?> FCFA </span>
                                        </div>
                                        <!-- <div class="single-reservation-logoPrice">
                                            <span class="single-reservation-logoPrice-thumb">
                                                <img src="assets/img/dashboard/mslogo.png" alt="img">
                                            </span>
                                            <span class="single-reservation-logoPrice-code"> ***9320 </span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        <div class="single-reservation-name">
                                            <h5 class="single-reservation-name-title">HOTEL: <?=$reservation['hotel']['name']?></h5>
                                        </div>
                                        <div class="single-reservation-btn">
                                            <?php if($reservation['reservation']['status'] == 'pending' || $reservation['reservation']['status'] == 'accepted' ){ ?>
                                                <a href="?changeStatus=<?=$reservation['reservation']['id']?>&status=cancelled" class="dash-btn popup-click  btn-cancelled"> <i
                                                    class="las la-exclamation-circle"></i> Cancel ? </a>
                                            <?php } ?>
                                            <?php if($reservation['reservation']['status'] == 'accepted' ){ ?>
                                            <a href="checkout.php?id=<?=$reservation['reservation']['id']?>" class="dash-btn popup-click"> <i
                                                class="las la-exclamation-circle"></i> Checkout? </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

require 'includes/footer.php';
require 'includes/includes_footer.php';
?>
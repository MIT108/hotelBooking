<?php
require("controllers/DashboardController.php");

require('includes/includes_header.php');
require('includes/navBar.php');
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
                require("includes/dashboardSidebar.php")
                ?>
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    <div class="dashboard-promo">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                                <div class="single-order">
                                    <div class="single-order-flex">
                                        <div class="single-order-contents">
                                            <span class="single-order-contents-subtitle"> Pending Reservation </span>
                                            <h2 class="single-order-contents-title"> 02 </h2>
                                        </div>
                                        <div class="single-order-icon">
                                            <i class="las la-history"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                                <div class="single-order">
                                    <div class="single-order-flex">
                                        <div class="single-order-contents">
                                            <span class="single-order-contents-subtitle"> Accepted Reservation </span>
                                            <h2 class="single-order-contents-title"> 32 </h2>
                                        </div>
                                        <div class="single-order-icon">
                                            <i class="las la-check-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                                <div class="single-order">
                                    <div class="single-order-flex">
                                        <div class="single-order-contents">
                                            <span class="single-order-contents-subtitle"> Cancelled Reservation </span>
                                            <h2 class="single-order-contents-title"> 08 </h2>
                                        </div>
                                        <div class="single-order-icon">
                                            <i class="las la-times-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                                <div class="single-order">
                                    <div class="single-order-contents">
                                        <span class="single-order-contents-subtitle"> Completed Reservation </span>
                                        <h2 class="single-order-contents-title">38 </h2>
                                    </div>
                                    <div class="single-order-icon">
                                        <i class="las la-clipboard-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-reservation">
                        <?php foreach ($reservations as $reservation) { ?>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #<?= $reservation['reservation']['id']?> </span>
                                    </div>
                                    <?php if($reservation['reservation']['status'] == 'pending'){ ?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                    </div>
                                    <?php }else if($reservation['reservation']['status'] == 'accepted'){ ?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-accepted"> Accepted </a>
                                    </div>
                                    <?php } else if ($reservation['reservation']['status'] == 'cancelled'){?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-cancelled"> Cancelled </a>
                                    </div>
                                    <?php }else if ($reservation['reservation']['status'] == 'completed'){?>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-completed"> Completed </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="single-reservation-inner">
                                <div class="single-reservation-item">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> Nelson Norman </h5>
                                        <p class="single-reservation-name-para"> (208) 555-0112 · 8502 Preston Rd.
                                            Inglewood, Maine 98380
                                        </p>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Check in </span>
                                            <h5 class="single-reservation-details-title"> 10:30 AM, 23 Jun 22 </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Check Out </span>
                                            <h5 class="single-reservation-details-title"> 10:30 AM, 28 Jun 22 </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Guests & Rooms </span>
                                            <h5 class="single-reservation-details-title"> 4 Adults, 2 Children, 3 Rooms
                                            </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Booked </span>
                                            <h5 class="single-reservation-details-title"> 28 Jun 22 </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        <div class="single-reservation-content">
                                            <h5 class="single-reservation-content-title"> Total Bill </h5>
                                            <span class="single-reservation-content-price"> $250 </span>
                                        </div>
                                        <div class="single-reservation-logoPrice">
                                            <span class="single-reservation-logoPrice-thumb">
                                                <img src="assets/img/dashboard/mslogo.png" alt="img">
                                            </span>
                                            <span class="single-reservation-logoPrice-code"> ***9320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        <div class="single-reservation-name">
                                            <h5 class="single-reservation-name-title"> Beyond Hotel </h5>
                                            <p class="single-reservation-name-para"> 4140 Parker Rd. Allentown, New
                                                Mexico 31134 </p>
                                        </div>
                                        <div class="single-reservation-btn">
                                            <a href="checkout.php?id=<?= $reservation['reservation']['id'] ?>" class="dash-btn popup-click"> <i
                                                    class="las la-exclamation-circle"></i> Checkout? </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

require('includes/footer.php');
require('includes/includes_footer.php');
?>
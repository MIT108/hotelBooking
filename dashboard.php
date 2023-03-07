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
                <div class="dashboard-left-content">
                    <div class="dashboard-close-main">
                        <div class="close-bars"> <i class="las la-times"></i> </div>
                        <div class="dashboard-bottom">
                            <ul class="dashboard-list list-style-none">
                                <li class="list active">
                                    <a href="dashboard.html"> <i class="las la-briefcase"></i> Dashboard </a>
                                </li>
                                <li class="list">
                                    <a href="dashboard_cancellation.html"> <i class="las la-times-circle"></i>
                                        Cancellation & Refund </a>
                                </li>
                                <li class="list">
                                    <a href="dashboard_report_issue.html"> <i class="las la-exclamation-triangle"></i>
                                        Report an issue
                                        <span class="badge-notification"> 12 </span> </a>
                                </li>
                                <li class="list has-children">
                                    <a href="javascript:void(0)"> <i class="las la-user-circle"></i> Profile </a>
                                    <ul class="submenu list-style-none">
                                        <li class="list"> <a href="dashboard_profile.html"> Profile </a> </li>
                                        <li class="list"> <a href="dashboard_edit_profile.html"> Edit Profile </a> </li>
                                        <li class="list"> <a href="dashboard_pass_change.html"> Password Change </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list has-children">
                                    <a href="javascript:void(0)"> <i class="las la-headset"></i> Support </a>
                                    <ul class="submenu list-style-none">
                                        <li class="list"> <a href="dashboard_support.html"> Support </a> </li>
                                        <li class="list"> <a href="dashboard_tickets.html"> Tickets </a> </li>
                                        <li class="list"> <a href="dashboard_add_tickets.html"> Add Tickets </a> </li>
                                    </ul>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <i class="las la-sign-out-alt"></i> Log Out </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                        <div class="single-reservation bg-white base-padding show open">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #824409583563 </span>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                    </div>
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
                                            <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                    class="las la-exclamation-circle"></i> Cancel? </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #824409583563 </span>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-cancelled"> Cancelled </a>
                                    </div>
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
                                            <span class="single-reservation-content-price"> $280 </span>
                                        </div>
                                        <div class="single-reservation-logoPrice">
                                            <span class="single-reservation-logoPrice-thumb">
                                                <img src="assets/img/dashboard/mslogo.png" alt="img">
                                            </span>
                                            <span class="single-reservation-logoPrice-code"> ***9520 </span>
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
                                            <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                    class="las la-exclamation-circle"></i> Cancel? </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #82443454765 </span>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                    </div>
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
                                            <span class="single-reservation-content-price"> $280 </span>
                                        </div>
                                        <div class="single-reservation-logoPrice">
                                            <span class="single-reservation-logoPrice-thumb">
                                                <img src="assets/img/dashboard/mslogo.png" alt="img">
                                            </span>
                                            <span class="single-reservation-logoPrice-code"> ***9520 </span>
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
                                            <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                    class="las la-exclamation-circle"></i> Cancel? </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

require('includes/footer.php');
require('includes/includes_footer.php');
?>
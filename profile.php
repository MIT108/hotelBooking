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
                        <h4 class="breadcrumb-contents-title"> Profile Details </h4>
                        <ul class="breadcrumb-contents-list list-style-none">
                            <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                    class="breadcrumb-contents-list-item-link"> Home </a> </li>
                            <li class="breadcrumb-contents-list-item"> Profile </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="galleryModal1" tabindex="-1" role="dialog" aria-labelledby="galleryModal1Title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModal1Title">
                        Change Profile Image
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label>Profile Image *: </label>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" required />
                        </div>
                        <input name="user_id" value="<?=$User['id']?>" hidden />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button class="btn btn-primary ml-1" type="submit" name="change_image">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Update</span>
                        </button>
                    </div>
                </form>
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
                            <div class="single-reservation-flex mb-4">
                                <div class="single-reservation-author">
                                    <div class="single-reservation-author-flex">
                                        <div class="single-reservation-author-thumb">
                                            <img src="images/customers/<?= $Customer['image']?>" alt="img">
                                        </div>
                                        <div class="single-reservation-author-contents">
                                            <h5 class="single-reservation-author-contents-title"> <?= $Customer['fname']?> <?= $Customer['lname']?>
                                            </h5>
                                            <p class="single-reservation-author-contents-para"> <?= $Customer['username']?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="editProfile.php" class="cmn-btn btn-border"> Edit Profile </a>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-contact">
                                    <div class="single-reservation-contact-item">
                                        <span class="single-reservation-contact-list"> 
                                                <?php if ($Customer['status'] == 'active') {?>
                                                <div class="single-reservation-btn">
                                                    <a href="javascript:void(0)" class="dash-btn btn-accepted "> active </a>
                                                </div>
                                                <?php } else if ($Customer['status'] == 'inactive') {?>
                                                <div class="single-reservation-btn">
                                                    <a href="javascript:void(0)" class="dash-btn btn-pending"> Inactive </a>
                                                </div>
                                                <?php } ?>
                                                </span>
                                    </div>
                                    <div class="single-reservation-contact-item">
                                        <a href="https://bytesed.com/cdn-cgi/l/email-protection#b6d8d3dac5d998d8d9c4dbd7d8f6d3ced7dbc6dad398d5d9db"
                                            class="single-reservation-contact-list"> <span> <i
                                                    class="las la-envelope"></i> </span> <span class="__cf_email__"
                                                data-cfemail="5b353e37283475353429363a351b3e233a362b373e75383436"><?= $Customer['email'] ?></span>
                                        </a>
                                    </div>
                                    <div class="single-reservation-contact-item">
                                        <a href="tel:(208)5550112" class="single-reservation-contact-list"> <span> <i
                                                    class="las la-phone-alt"></i> </span> <?= $Customer['phone'] ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-flex">
                                <div class="single-reservation-author">
                                    <div class="single-reservation-author-flex">
                                        <div class="single-reservation-author-contents">
                                            <h5 class="single-reservation-author-contents-title"> Password </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="changePassword.php" class="cmn-btn btn-border"> Change Password
                                    </a>
                                </div>
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
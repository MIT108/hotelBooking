<header class="header-style-01">

    <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
        <div class="container custom-container-one nav-container">
            <div class="logo-wrapper">
                <a href="index.php" class="logo">
                    <img src="assets/img/single-page/logo1.png" alt="">
                </a>
            </div>
            <div class="responsive-mobile-menu d-lg-none">
                <a href="javascript:void(0)" class="click-nav-right-icon">
                    <i class="las la-ellipsis-v"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#hotel_booking_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="hotel_booking_menu">
                <ul class="navbar-nav">
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="about.php"> About </a></li>
                    <li><a href="contact.php"> Contact Us </a></li>
                    <li><a href="#"> Blog </a></li>
                    <li><a href="dashboard.php"> Dashboard </a></li>
                </ul>
            </div>
            <?php
            if(!isset($_SESSION['authCustomer'])){
            ?>
            <div class="navbar-right-content show-nav-content">
                <div class="single-right-content">
                    <div class="navbar-right-flex">
                        <div class="navbar-right-btn">
                            <a href="login.php"> Log In </a>
                        </div>
                        <div class="btn-wrapper">
                            <a href="signup.php" class="cmn-btn btn-bg-1 radius-10"> Sign Up </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="navbar-right-content show-nav-content">
                <div class="single-right-content">
                    <div class="navbar-author">
                        <div class="navbar-author-flex">
                            <div class="navbar-author-thumb">
                                <img src="images/customers/<?= $Customer['image']?>" alt="img">
                            </div>
                            <div class="navbar-author-name">
                                <h6 class="navbar-author-name-title"> <?= $Customer['fname']." ".$Customer['lname'] ?>
                                </h6>
                                <small>
                                    <i> @<?= $Customer['username'] ?>
                                    </i>
                                </small>
                            </div>
                        </div>
                        <div class="navbar-author-wrapper">
                            <div class="navbar-author-wrapper-list">
                                <a href="signup.html" class="navbar-author-wrapper-list-item"> Profile </a>
                                <a href="login.html" class="navbar-author-wrapper-list-item"> Edit Profile </a>
                                <span class="navbar-author-wrapper-list-item"> Log Out </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </nav>

</header>
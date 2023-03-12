<?php
require "controllers/HotelController.php";

require 'includes/includes_header.php';
require 'includes/navBar.php';
?>


<div class="banner-area banner-area-one">
    <div class="container-fluid p-0">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="banner-single banner-single-one percent-padding">
                    <div class="banner-single-content">
                        <h2 class="banner-single-content-title fw-700"> Enjoy holidays, vacations & family time with
                            us. </h2>
                        <p class="banner-single-content-para mt-3"> Amet minim mollit non deserunt ullamco est sit
                            aliqua dolor do amet sint. Velit officia consequat duis enim. </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-image banner-right-bg radius-20"
                style="background-image: url(assets/img/banner/banner.old.jpg);"></div>
        </div>
    </div>
</div>


<section class="booking-area pat-100 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Why book our hotels? </h2>
            <div class="section-title-shapes"> </div>
        </div>
        <div class="row gy-4 mt-5">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                <div class="single-why center-text bg-white single-why-border radius-10">
                    <div class="single-why-icon">
                        <img src="assets/img/icons/b1.svg" alt="icon">
                    </div>
                    <div class="single-why-contents mt-3">
                        <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Hassle Free Booking
                            </a> </h4>
                        <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                            hassle. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow zoomIn" data-wow-delay=".4s">
                <div class="single-why center-text bg-white single-why-border radius-10">
                    <div class="single-why-icon">
                        <img src="assets/img/icons/b2.svg" alt="icon">
                    </div>
                    <div class="single-why-contents mt-3">
                        <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 28K Reviews </a> </h4>
                        <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                            hassle. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="single-why center-text bg-white single-why-border radius-10">
                    <div class="single-why-icon">
                        <img src="assets/img/icons/b3.svg" alt="icon">
                    </div>
                    <div class="single-why-contents mt-3">
                        <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Free Cancellation </a>
                        </h4>
                        <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                            hassle. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="single-why center-text bg-white single-why-border radius-10">
                    <div class="single-why-icon">
                        <img src="assets/img/icons/b4.svg" alt="icon">
                    </div>
                    <div class="single-why-contents mt-3">
                        <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 24/7 Support </a> </h4>
                        <p class="single-why-contents-para mt-3"> Book your hotel from our website without any
                            hassle. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="attraction-area pat-50 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Nearby Hotels </h2>
            <div class="section-title-shapes"> </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="global-slick-init attraction-slider nav-style-one nav-color-two slider-inner-margin"
                    data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4"
                    data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                    data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
                    data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
                    data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                    <?php while ($row = $hotels->fetch_assoc()) {?>
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb" style="
                                background-color: lightgray;
                                width: 310px;
                                height: 400px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                resize: cover;">
                                <a href="images/hotels/<?=$row['image']?>" class="gallery-popup"> <img
                                        src="images/hotels/<?=$row['image']?>" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php?hotel_id=<?=$row['id']?>">
                                        <?=$row['name']?> </a> </h4>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="question-area pat-50 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Frequently Asked Question </h2>
            <div class="section-title-shapes"> </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-xl-12 col-lg-12">
                <div class="faq-wrapper">
                    <div class="faq-contents">

                        <?php 
                        $count = 0;
                        while ($row = $faqs->fetch_assoc()) {
                        $id = $row['id'];
                        $count += 1;
                        ?>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".<?=$count?>s">
                            <h3 class="faq-title">
                                <?= $row['question'] ?>
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> <?= $row['answer'] ?> </p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require 'includes/patners.php';

require 'includes/footer.php';
require 'includes/includes_footer.php';
?>
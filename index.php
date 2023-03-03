<?php
require('includes/includes_header.php');
require('includes/navBar.php');
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
                        <div class="banner-location banner-location-one bg-white radius-5 mt-5">
                            <div class="banner-location-flex">
                                <div class="banner-location-single">
                                    <div class="banner-location-single-flex">
                                        <div class="banner-location-single-icon">
                                            <i class="las la-map-marker-alt"></i>
                                        </div>
                                        <div class="banner-location-single-contents">
                                            <span class="banner-location-single-contents-subtitle"> Location </span>
                                            <div class="banner-location-single-contents-dropdown">
                                                <select class="js-select select-style-two" name="state">
                                                    <option value="1">Allentown, New Mexico</option>
                                                    <option value="2">Allentown, New NewYork</option>
                                                    <option value="3">Allentown, New Barcelona</option>
                                                    <option value="4">Allentown, Paris</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-location-single">
                                    <div class="banner-location-single-flex">
                                        <div class="banner-location-single-icon">
                                            <i class="las la-calendar"></i>
                                        </div>
                                        <div class="banner-location-single-contents">
                                            <span class="banner-location-single-contents-subtitle"> Check In </span>
                                            <div class="banner-location-single-contents-dropdown custom-select">
                                                <select class="js-select select-style-two" name="state">
                                                    <option value="1">20 Jun 2022</option>
                                                    <option value="2">21 Jun 2022</option>
                                                    <option value="3">22 Jun 2022</option>
                                                    <option value="4">23 Jun 2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-location-single">
                                    <div class="banner-location-single-flex">
                                        <div class="banner-location-single-icon">
                                            <i class="las la-calendar"></i>
                                        </div>
                                        <div class="banner-location-single-contents">
                                            <span class="banner-location-single-contents-subtitle"> Check Out
                                            </span>
                                            <div class="banner-location-single-contents-dropdown custom-select">
                                                <select class="js-select select-style-two" name="state">
                                                    <option value="1">20 Jul 2022</option>
                                                    <option value="2">21 Jul 2022</option>
                                                    <option value="3">22 Jul 2022</option>
                                                    <option value="4">23 Jul 2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-location-single">
                                    <div class="banner-location-single-flex">
                                        <div class="banner-location-single-icon">
                                            <i class="las la-user-friends"></i>
                                        </div>
                                        <div class="banner-location-single-contents">
                                            <span class="banner-location-single-contents-subtitle"> Person </span>
                                            <div class="banner-location-single-contents-dropdown custom-select">
                                                <select class="js-select select-style-two" name="state">
                                                    <option value="1">2 People</option>
                                                    <option value="2">3 People</option>
                                                    <option value="3">4 People</option>
                                                    <option value="4">5 People</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-location-single">
                                    <div class="banner-location-single-flex">
                                        <div class="banner-location-single-icon">
                                            <i class="las la-user-friends"></i>
                                        </div>
                                        <div class="banner-location-single-contents">
                                            <span class="banner-location-single-contents-subtitle"> Children </span>
                                            <div class="banner-location-single-contents-dropdown custom-select">
                                                <select class="js-select select-style-two" name="state">
                                                    <option value="1">2 Children</option>
                                                    <option value="2">3 Children</option>
                                                    <option value="3">4 Children</option>
                                                    <option value="4">5 Children</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-location-single-search">
                                    <div class="search-suggestions-wrapper">
                                        <div class="search-click-icon">
                                            <i class="las la-search"></i>
                                        </div>
                                        <div class="search-show">
                                            <div class="search-show-inner">
                                                <form action="#">
                                                    <div class="search-show-form">
                                                        <input autocomplete="off" class="form--control"
                                                            id="search_form_input" type="text"
                                                            placeholder="Search here....">
                                                        <button type="submit"> <i class="las la-search"></i>
                                                        </button>
                                                        <span class="suggestions-icon-close"> <i
                                                                class="las la-times"></i> </span>
                                                    </div>
                                                    <div class="search-product" id="search_suggestions_wrap">
                                                        <div class="search-product-inner">
                                                            <h6 class="search-product-title">Product Suggestions
                                                            </h6>
                                                            <ul class="search-product-list mt-4">
                                                                <li class="search-product-list-item">
                                                                    <a href="javascript:void(0)"
                                                                        class="search-product-list-link">
                                                                        <div class="search-product-list-image"><img
                                                                                src="assets/img/search_suggestion/s1.jpg"
                                                                                alt="img"></div>
                                                                        <div class="search-product-list-info">
                                                                            <div class="search-product-list-info-top">
                                                                                <h6
                                                                                    class="earch-product-list-info-title">
                                                                                    Apple Original Air pod
                                                                                    Collection for most popular and
                                                                                    best price item in market </h6>
                                                                            </div>
                                                                            <div
                                                                                class="search-product-list-info-price mt-2">
                                                                                <div
                                                                                    class="search-product-list-info-price-through">
                                                                                    <span class="flash-price">
                                                                                        $330.00 </span>
                                                                                    <span class="old-price"> $300.00
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="search-product-list-item">
                                                                    <a href="javascript:void(0)"
                                                                        class="search-product-list-link">
                                                                        <div class="search-product-list-image"><img
                                                                                src="assets/img/search_suggestion/s2.jpg"
                                                                                alt="img"></div>
                                                                        <div class="search-product-list-info">
                                                                            <div class="search-product-list-info-top">
                                                                                <h6
                                                                                    class="earch-product-list-info-title">
                                                                                    Apple Original Airpod Collection
                                                                                </h6>
                                                                            </div>
                                                                            <div
                                                                                class="search-product-list-info-price mt-2">
                                                                                <span
                                                                                    class="main-price fw-500 color-light">$269.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="search-product-list-item">
                                                                    <a href="javascript:void(0)"
                                                                        class="search-product-list-link">
                                                                        <div class="search-product-list-image"><img
                                                                                src="assets/img/search_suggestion/s3.jpg"
                                                                                alt="img"></div>
                                                                        <div class="search-product-list-info">
                                                                            <div class="search-product-list-info-top">
                                                                                <h6
                                                                                    class="earch-product-list-info-title">
                                                                                    Apple Original Airpod Collection
                                                                                </h6>
                                                                            </div>
                                                                            <div
                                                                                class="search-product-list-info-price mt-2">
                                                                                <span
                                                                                    class="main-price fw-500 color-light">$499.00</span>
                                                                                <span class="stock-out"> Stock Out
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="search-product-list-item">
                                                                    <a href="javascript:void(0)"
                                                                        class="search-product-list-link">
                                                                        <div class="search-product-list-image"><img
                                                                                src="assets/img/search_suggestion/s4.jpg"
                                                                                alt="img"></div>
                                                                        <div class="search-product-list-info">
                                                                            <div class="search-product-list-info-top">
                                                                                <h6
                                                                                    class="earch-product-list-info-title">
                                                                                    Apple Original Airpod Collection
                                                                                </h6>
                                                                            </div>
                                                                            <div
                                                                                class="search-product-list-info-price mt-2">
                                                                                <span
                                                                                    class="main-price fw-500 color-light">$499.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="search-product-list-item">
                                                                    <a href="javascript:void(0)"
                                                                        class="search-product-list-link">
                                                                        <div class="search-product-list-image"><img
                                                                                src="assets/img/search_suggestion/s5.jpg"
                                                                                alt="img"></div>
                                                                        <div class="search-product-list-info">
                                                                            <div class="search-product-list-info-top">
                                                                                <h6
                                                                                    class="earch-product-list-info-title">
                                                                                    Apple Original Airpod Collection
                                                                                </h6>
                                                                            </div>
                                                                            <div
                                                                                class="search-product-list-info-price mt-2">
                                                                                <span
                                                                                    class="main-price fw-500 color-light">$499.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-suggestion-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-image banner-right-bg radius-20"
                style="background-image: url(assets/img/banner/banner.jpg);"></div>
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
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb">
                                <a href="assets/img/attraction/a5.jpg" class="gallery-popup"> <img
                                        src="assets/img/attraction/a5.jpg" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php">
                                        Eiffel Tower </a> </h4>
                                <p class="single-attraction-two-contents-para"> We have over 28K reviews to assure
                                    you top notch service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb">
                                <a href="assets/img/attraction/a6.jpg" class="gallery-popup"> <img
                                        src="assets/img/attraction/a6.jpg" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php">
                                        Disneyland </a> </h4>
                                <p class="single-attraction-two-contents-para"> We have over 28K reviews to assure
                                    you top notch service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb">
                                <a href="assets/img/attraction/a7.jpg" class="gallery-popup"> <img
                                        src="assets/img/attraction/a7.jpg" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php">
                                        Palace de justice </a> </h4>
                                <p class="single-attraction-two-contents-para"> We have over 28K reviews to assure
                                    you top notch service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb">
                                <a href="assets/img/attraction/a8.jpg" class="gallery-popup"> <img
                                        src="assets/img/attraction/a8.jpg" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php"> Arc
                                        de Trimorph </a> </h4>
                                <p class="single-attraction-two-contents-para"> We have over 28K reviews to assure
                                    you top notch service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="attraction-item">
                        <div class="single-attraction-two radius-20">
                            <div class="single-attraction-two-thumb">
                                <a href="assets/img/attraction/a6.jpg" class="gallery-popup"> <img
                                        src="assets/img/attraction/a6.jpg" alt="img"> </a>
                            </div>
                            <div class="single-attraction-two-contents">
                                <h4 class="single-attraction-two-contents-title"> <a href="roomList.php">
                                        Disneyland </a> </h4>
                                <p class="single-attraction-two-contents-para"> We have over 28K reviews to assure
                                    you top notch service. </p>
                            </div>
                        </div>
                    </div>
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
            <div class="col-xl-8 col-lg-7">
                <div class="faq-wrapper">
                    <div class="faq-contents">
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                How does it works?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                    ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                    turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                            </div>
                        </div>
                        <div class="faq-item active open wow fadeInLeft" data-wow-delay=".2s">
                            <h3 class="faq-title">
                                Do I get full refund if I cancel?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                    ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                    turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".3s">
                            <h3 class="faq-title">
                                Do you offer pool service?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                    ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                    turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                What if I want to cancel?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                    ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                    turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                            </div>
                        </div>
                        <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                            <h3 class="faq-title">
                                What’s the closure time?
                            </h3>
                            <div class="faq-panel">
                                <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non
                                    ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed
                                    turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="faq-question faq-question-border radius-10 sticky-top">
                    <h3 class="faq-question-title"> Still got questions? </h3>
                    <div class="faq-question-form custom-form mat-20">
                        <form action="#">
                            <div class="single-input">
                                <label class="label-title"> Name </label>
                                <input type="text" class="form--control radius-10" placeholder="Type Name">
                            </div>
                            <div class="single-input">
                                <label class="label-title"> Email </label>
                                <input type="text" class="form--control radius-10" placeholder="Type Email">
                            </div>
                            <div class="single-input">
                                <label class="label-title"> Questions </label>
                                <textarea name="message" class="form--control form-message radius-10"
                                    placeholder="Type Your Questons..."></textarea>
                            </div>
                            <button class="submit-btn w-100 radius-10" type="submit"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area pat-50 pab-50">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"> Latest News </h2>
            <div class="section-title-shapes"> </div>
        </div>
        <div class="row gy-4 mt-4">
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="single-blog-thumbs">
                        <a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog1.jpg" alt="">
                        </a>
                        <div class="single-blog-thumbs-date">
                            <a href="javascript:void(0)"> <span class="date"> 18 </span> <span class="month"> Jun
                                </span> </a>
                        </div>
                    </div>
                    <div class="single-blog-contents mt-3">
                        <div class="single-blog-contents-tags mt-3">
                            <span class="single-blog-contents-tags-item">
                                <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                            </span>
                            <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 22 Comments
                                </a> </span>
                        </div>
                        <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Great Deals to
                                Send Your Loved Ones Somewhere Nice </a> </h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="single-blog-thumbs">
                        <a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog2.jpg" alt="">
                        </a>
                        <div class="single-blog-thumbs-date">
                            <a href="javascript:void(0)"> <span class="date"> 19 </span> <span class="month"> Jun
                                </span> </a>
                        </div>
                    </div>
                    <div class="single-blog-contents mt-3">
                        <div class="single-blog-contents-tags mt-3">
                            <span class="single-blog-contents-tags-item">
                                <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                            </span>
                            <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 25 Comments
                                </a> </span>
                        </div>
                        <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Read Real Guest
                                Reviews. 24/7 Customer Service and others. </a> </h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="single-blog-thumbs">
                        <a href="blog_details.html"> <img class="lazyloads" src="assets/img/blog/blog3.jpg" alt="">
                        </a>
                        <div class="single-blog-thumbs-date">
                            <a href="javascript:void(0)"> <span class="date"> 20 </span> <span class="month"> Jun
                                </span> </a>
                        </div>
                    </div>
                    <div class="single-blog-contents mt-3">
                        <div class="single-blog-contents-tags mt-3">
                            <span class="single-blog-contents-tags-item">
                                <a href="javascript:void(0)"> <i class="las la-tag"></i> Hotel </a>
                            </span>
                            <span class="single-blog-contents-tags-item"> <a href="javascript:void(0)"> 12 Comments
                                </a> </span>
                        </div>
                        <h4 class="single-blog-contents-title mt-3"> <a href="blog_details.html"> Compare hotel
                                prices and find an amazing price for the Resort </a> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="brand-area pat-50 pab-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="global-slick-init attraction-slider slider-inner-margin" data-slidesToShow="6"
                    data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true"
                    data-autoplay="true" data-autoplaySpeed="2500"
                    data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                    data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                    data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo1.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo2.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo4.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo5.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo6.png" alt="brandLogo">
                        </a>
                    </div>
                    <div class="single-brand">
                        <a href="javascript:void(0)" class="single-brand-thumb">
                            <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                        </a>
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
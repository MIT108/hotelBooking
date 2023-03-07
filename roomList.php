<?php
require('controllers/HotelController.php');
require('includes/includes_header.php');
require('includes/navBar.php');
if(!isset($_GET['hotel_id'])){
echo "<script>
    window.location.replace('index.php');
</script>";
}
?>

<div class="breadcrumb-area section-bg-2 breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <?php
            require('admin/includes/alert.php');
            ?>
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Room List </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> Rools </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="responsive-overlay"></div>
<section class="hotel-list-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <div class="banner-location bg-white radius-10">
            <div class="banner-location-flex">
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
                            <span class="banner-location-single-contents-subtitle"> Check Out </span>
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
                                        <input autocomplete="off" class="form--control" id="search_form_input"
                                            type="text" placeholder="Search here....">
                                        <button type="submit"> <i class="las la-search"></i> </button>
                                        <span class="suggestions-icon-close"> <i class="las la-times"></i> </span>
                                    </div>
                                    <div class="search-product" id="search_suggestions_wrap">
                                        <div class="search-product-inner">
                                            <h6 class="search-product-title">Product Suggestions</h6>
                                            <ul class="search-product-list mt-4">
                                                <li class="search-product-list-item">
                                                    <a href="javascript:void(0)" class="search-product-list-link">
                                                        <div class="search-product-list-image"><img
                                                                src="assets/img/search_suggestion/s1.jpg" alt="img">
                                                        </div>
                                                        <div class="search-product-list-info">
                                                            <div class="search-product-list-info-top">
                                                                <h6 class="earch-product-list-info-title"> Apple
                                                                    Original Air pod Collection for most popular and
                                                                    best price item in market </h6>
                                                            </div>
                                                            <div class="search-product-list-info-price mt-2">
                                                                <div class="search-product-list-info-price-through">
                                                                    <span class="flash-price"> FCFA 330.00 </span>
                                                                    <span class="old-price"> FCFA 300.00 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="search-product-list-item">
                                                    <a href="javascript:void(0)" class="search-product-list-link">
                                                        <div class="search-product-list-image"><img
                                                                src="assets/img/search_suggestion/s2.jpg" alt="img">
                                                        </div>
                                                        <div class="search-product-list-info">
                                                            <div class="search-product-list-info-top">
                                                                <h6 class="earch-product-list-info-title"> Apple
                                                                    Original Airpod Collection </h6>
                                                            </div>
                                                            <div class="search-product-list-info-price mt-2">
                                                                <span class="main-price fw-500 color-light">FCFA
                                                                    269.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="search-product-list-item">
                                                    <a href="javascript:void(0)" class="search-product-list-link">
                                                        <div class="search-product-list-image"><img
                                                                src="assets/img/search_suggestion/s3.jpg" alt="img">
                                                        </div>
                                                        <div class="search-product-list-info">
                                                            <div class="search-product-list-info-top">
                                                                <h6 class="earch-product-list-info-title"> Apple
                                                                    Original Airpod Collection </h6>
                                                            </div>
                                                            <div class="search-product-list-info-price mt-2">
                                                                <span
                                                                    class="main-price fw-500 color-light">$499.00</span>
                                                                <span class="stock-out"> Stock Out </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="search-product-list-item">
                                                    <a href="javascript:void(0)" class="search-product-list-link">
                                                        <div class="search-product-list-image"><img
                                                                src="assets/img/search_suggestion/s4.jpg" alt="img">
                                                        </div>
                                                        <div class="search-product-list-info">
                                                            <div class="search-product-list-info-top">
                                                                <h6 class="earch-product-list-info-title"> Apple
                                                                    Original Airpod Collection </h6>
                                                            </div>
                                                            <div class="search-product-list-info-price mt-2">
                                                                <span
                                                                    class="main-price fw-500 color-light">$499.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="search-product-list-item">
                                                    <a href="javascript:void(0)" class="search-product-list-link">
                                                        <div class="search-product-list-image"><img
                                                                src="assets/img/search_suggestion/s5.jpg" alt="img">
                                                        </div>
                                                        <div class="search-product-list-info">
                                                            <div class="search-product-list-info-top">
                                                                <h6 class="earch-product-list-info-title"> Apple
                                                                    Original Airpod Collection </h6>
                                                            </div>
                                                            <div class="search-product-list-info-price mt-2">
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
        <div class="shop-contents-wrapper mt-5">
            <div class="shop-grid-contents">
                <div id="tab-grid" class="tab-content-item active mt-4">
                    <div class="row gy-4">
                        <?php while($row = $rooms->fetch_assoc()){?>
                        <div class="col-md-6">
                            <div class="hotel-view bg-white radius-20">
                                <a href="roomDetail.php?room_id=<?= $row['id'] ?>&hotel_id=<?= $_GET['hotel_id'] ?>"
                                    class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                    style="background-image: url(images/rooms/<?= $row['image1'] ?>);">
                                </a>
                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <span class="hotel-view-contents-review"> <i class="las la-star"></i> <?= $row['rating'] ?>
                                            <span class="hotel-view-contents-review-count"> (<?= $row['review'] ?>)
                                            </span> </span>
                                        <h3 class="hotel-view-contents-title"> <a
                                                href="roomDetail.php?room_id=<?= $row['id'] ?>&hotel_id=<?= $_GET['hotel_id'] ?>">
                                                <?= $row['name'] ?></a> </h3>
                                        <div class="hotel-view-contents-location mt-2">
                                            <span class="hotel-view-contents-location-icon"> <i
                                                    class="las la-map-marker-alt"></i> </span>
                                            <span class="hotel-view-contents-location-para"><?= $row['location'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="hotel-view-contents-middle">
                                        <div class="hotel-view-contents-flex">
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Car Parking">
                                                <i class="las la-parking"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Free Wifi">
                                                <i class="las la-wifi"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Free Breakfast">
                                                <i class="las la-coffee"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Home Service">
                                                <i class="las la-quidditch"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Swimming Pool">
                                                <i class="las la-swimming-pool"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Reception">
                                                <i class="las la-receipt"></i>
                                            </div>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Gym">
                                                <i class="las la-dumbbell"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel-view-contents-bottom">
                                        <div class="hotel-view-contents-bottom-flex">
                                            <div class="hotel-view-contents-bottom-contents">
                                                <h4 class="hotel-view-contents-bottom-title"><?= $row['price'] ?> FCFA
                                                </h4>
                                                <p class="hotel-view-contents-bottom-para"> (<?= $row['num_beds'] ?> Beds,
                                                    <?= $row['num_persons'] ?> Persons) </p>
                                            </div>
                                            <div class="btn-wrapper">
                                                <a href="makeResevation.php?room_id=<?= $row['id']?>&hotel_id=<?= $_GET['hotel_id'] ?>" class="cmn-btn btn-bg-1 btn-small">
                                                    Reserve Now </a>
                                            </div>
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
</section>



<?php
require('includes/footer.php');
require('includes/includes_footer.php');
?>
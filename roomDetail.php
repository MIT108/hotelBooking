<?php
require "controllers/HotelController.php";

require 'includes/includes_header.php';
require 'includes/navBar.php';
if (!isset($_GET['room_id']) || !isset($_GET['hotel_id'])) {
    echo "<script>
    window.location.replace('index.php');
</script>";
}
?>

<div class="breadcrumb-area breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <?php
require 'admin/includes/alert.php';
?>
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Room Details </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> <a href="listing.html"
                                class="breadcrumb-contents-list-item-link"> Room </a> </li>
                        <li class="breadcrumb-contents-list-item"> Room Details </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="hotel-details-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-12 col-lg-12">
                <div class="details-left-wrapper">
                    <div class="details-contents bg-white radius-10">
                        <div class="details-contents-header">
                            <div class="details-contents-thumb details-contents-main-thumb bg-image"
                                style="background-image: url(images/rooms/<?=$room['image1']?>);">
                            </div>
                            <div class="details-contents-header-flex" style="display: flex" >
                                <div class="details-contents-header-thumb" style="width: 40%" >
                                    <img src="images/rooms/<?=$room['image2']?>" alt="img">
                                </div>
                                <div class="details-contents-header-thumb" style="width: 40%" >
                                    <img src="images/rooms/<?=$room['image3']?>" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="hotel-view-contents">
                            <div class="hotel-view-contents-header">
                                <span class="hotel-view-contents-review"> <i class="las la-star"></i>
                                    <?=$room['rating']?> <span
                                        class="hotel-view-contents-review-count"> (<?=$room['review']?>) </span>
                                        </span>
                                <h3 class="hotel-view-contents-title"><?=$room['name']?></h3>
                                <div class="hotel-view-contents-location mt-2">
                                    <span class="hotel-view-contents-location-icon"> <i
                                            class="las la-map-marker-alt"></i> </span>
                                    <span class="hotel-view-contents-location-para"> <?=$room['location']?> </span>
                                </div>
                            </div>
                            <div class="hotel-view-contents-middle">
                                <div class="hotel-view-contents-flex">
                                    <?php if ($room['parking'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-parking"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['wifi'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-wifi"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['breakfast'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-coffee"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['room_service'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-quidditch"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['pool'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-swimming-pool"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['reception'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-receipt"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                    </div>
                                    <?php }?>
                                    <?php if ($room['gym'] == 1) {?>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-dumbbell"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="hotel-view-contents-bottom">
                                <div class="hotel-view-contents-bottom-flex">
                                    <div class="hotel-view-contents-bottom-contents">
                                        <h4 class="hotel-view-contents-bottom-title"> <?=$room['price']?> FCFA
                                            <sub>/Night</sub> </h4>
                                        <p class="hotel-view-contents-bottom-para"> ( <?=$room['num_beds']?> Beds, <?=$room['num_persons']?> Persons)
                                        </p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="makeResevation.php?room_id=<?=$room['id']?>&hotel_id=<?=$_GET['hotel_id']?>"
                                            class="cmn-btn btn-bg-1 btn-small"> Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-contents-tab">
                            <ul class="tabs details-tab details-tab-border">
                                <li class="active" data-tab="about"> About </li>
                            </ul>
                            <div id="about" class="tab-content-item active">
                                <div class="about-tab-contents">
                                    <p class="about-tab-contents-para"><?=$room['about']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require 'includes/footer.php';
require 'includes/includes_footer.php';
?>
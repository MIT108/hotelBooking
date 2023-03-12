<?php
require 'controllers/HotelController.php';
require 'includes/includes_header.php';
require 'includes/navBar.php';
if (!isset($_GET['hotel_id'])) {
    echo "<script>
    window.location.replace('index.php');
</script>";
}
?>

<div class="breadcrumb-area section-bg-2 breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <?php
require 'admin/includes/alert.php';
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
<section class="hotel-list-area section-bg-2 pat-10 pab-100">
    <div class="container">
        <div class="shop-contents-wrapper mt-5">
            <div class="shop-grid-contents">
                <div id="tab-grid" class="tab-content-item active mt-4">
                    <div class="row gy-4">
                        <?php while ($row = $rooms->fetch_assoc()) {?>
                        <div class="col-md-6">
                            <div class="hotel-view bg-white radius-20">
                                <a href="roomDetail.php?room_id=<?=$row['id']?>&hotel_id=<?=$_GET['hotel_id']?>"
                                    class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                    style="background-image: url(images/rooms/<?=$row['image1']?>);">
                                </a>
                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <span class="hotel-view-contents-review"> <i class="las la-star"></i> <?=$row['rating']?>
                                            <span class="hotel-view-contents-review-count"> (<?=$row['review']?>)
                                            </span> </span>
                                        <h3 class="hotel-view-contents-title"> <a
                                                href="roomDetail.php?room_id=<?=$row['id']?>&hotel_id=<?=$_GET['hotel_id']?>">
                                                <?=$row['name']?></a> </h3>
                                        <div class="hotel-view-contents-location mt-2">
                                            <span class="hotel-view-contents-location-icon"> <i
                                                    class="las la-map-marker-alt"></i> </span>
                                            <span class="hotel-view-contents-location-para"><?=$row['location']?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="hotel-view-contents-middle">
                                        <div class="hotel-view-contents-flex">
                                            <?php if ($row['parking'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Car Parking">
                                                <i class="las la-parking"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['wifi'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Free Wifi">
                                                <i class="las la-wifi"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['breakfast'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Free Breakfast">
                                                <i class="las la-coffee"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['room_service'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Home Service">
                                                <i class="las la-quidditch"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['pool'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Swimming Pool">
                                                <i class="las la-swimming-pool"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['reception'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Reception">
                                                <i class="las la-receipt"></i>
                                            </div>
                                            <?php }?>
                                            <?php if ($row['gym'] == 1) {?>
                                            <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Gym">
                                                <i class="las la-dumbbell"></i>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="hotel-view-contents-bottom">
                                        <div class="hotel-view-contents-bottom-flex">
                                            <div class="hotel-view-contents-bottom-contents">
                                                <h4 class="hotel-view-contents-bottom-title"><?=$row['price']?> FCFA
                                            <sub>/Night</sub> </h4>
                                                <p class="hotel-view-contents-bottom-para"> (<?=$row['num_beds']?> Beds,
                                                    <?=$row['num_persons']?> Persons) </p>
                                            </div>
                                            <div class="btn-wrapper">
                                                <a href="makeResevation.php?room_id=<?=$row['id']?>&hotel_id=<?=$_GET['hotel_id']?>" class="cmn-btn btn-bg-1 btn-small">
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
require 'includes/footer.php';
require 'includes/includes_footer.php';
?>
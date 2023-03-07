<?php
require("controllers/RoomController.php");

require("includes/includes_header.php");
require("includes/navBar.php");
if(!isset($_GET['id'])){
echo "<script>
    window.location.replace('rooms.php');
</script>";
}

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Room</h3>
            </div>
        </div>
    </div>
    <?php 
        require("includes/alert.php");
    ?>
    <div class="modal fade" id="galleryModal1" tabindex="-1" role="dialog" aria-labelledby="galleryModal1Title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModal1Title">
                        Change image 1
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label>Image 1 *: </label>
                        <div class="form-group">
                            <input type="file" name="image1" class="form-control" required />
                        </div>
                        <input name="room_id" value="<?= $room['id']?>" hidden />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button class="btn btn-primary ml-1" type="submit" name="change_image1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Update</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="galleryModal2" tabindex="-1" role="dialog" aria-labelledby="galleryModal2Title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModal2Title">
                        Change Image 2
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label>Image 2 *: </label>
                        <div class="form-group">
                            <input type="file" name="image2" class="form-control" required />
                        </div>
                        <input name="room_id" value="<?= $room['id']?>" hidden />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button class="btn btn-primary ml-1" type="submit" name="change_image2">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Update</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="galleryModal3" tabindex="-1" role="dialog" aria-labelledby="galleryModal3Title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModal3Title">
                        Change image 3
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label>Image 3 *: </label>
                        <div class="form-group">
                            <input type="file" name="image3" class="form-control" required />
                        </div>
                        <input name="room_id" value="<?= $room['id']?>" hidden />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>

                        <button class="btn btn-primary ml-1" type="submit" name="change_image3">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Update</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Basic Horizontal form layout section start -->
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gallery">
                            <div class="col-6 col-sm-6 col-lg-4 mt-2 mt-md-0 mb-md-0 mb-2" data-bs-toggle="modal"
                                data-bs-target="#galleryModal1">
                                <a href="#">
                                    <img class="w-100 active" src="../images/rooms/<?= $room['image1']?>"
                                        data-bs-target="#Gallerycarousel1" data-bs-slide-to="0" />
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-4 mt-2 mt-md-0 mb-md-0 mb-2" data-bs-toggle="modal"
                                data-bs-target="#galleryModal2">
                                <a href="#">
                                    <img class="w-100" src="../images/rooms/<?= $room['image2']?>"
                                        data-bs-target="#Gallerycarousel2" data-bs-slide-to="1" />
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-4 mt-2 mt-md-0 mb-md-0 mb-2" data-bs-toggle="modal"
                                data-bs-target="#galleryModal3">
                                <a href="#">
                                    <img class="w-100" src="../images/rooms/<?= $room['image3']?>"
                                        data-bs-target="#Gallerycarousel3" data-bs-slide-to="2" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Room Information</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Name</h5>
                                                <div>
                                                    <?= $room['name'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Location</h5>
                                                <div>
                                                    <?= $room['location'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Number of Beds</h5>
                                                <div>
                                                    <?= $room['num_beds'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Number of Persons</h5>
                                                <div>
                                                    <?= $room['num_persons'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>About</h5>
                                                <div>
                                                    <?= $room['about'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Price</h5>
                                                <div>
                                                    <?= $room['price'] ?> FCFA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Rating</h5>
                                                <div>
                                                    <?= $room['rating'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Review</h5>
                                                <div>
                                                    <?= $room['review'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Parking</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['parking'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Wifi</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['wifi'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Breakfast</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['breakfast'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Room Service</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['room_service'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Pool</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['pool'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Reception</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['reception'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Gym</h5>
                                                <div>
                                                    <?php
                                                    $retVal = ($room['gym'] == 1) ? "yes" : "no";
                                                    echo $retVal ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Status</h5>
                                                <div>
                                                    <?php if($room['status'] == 'active'){ ?><span
                                                        class="badge bg-success">Active</span><?php }else{ ?> <span
                                                        class="badge bg-danger">Inactive</span><?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Room</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="row">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Name</h5>
                                                    <div>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            value="<?= $room['name'] ?>" required name="name"
                                                            readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Location</h5>
                                                    <div>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            value="<?= $room['location'] ?>" required name="location" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Number of Beds</h5>
                                                    <div>
                                                        <input type="number" id="first-name-column" class="form-control"
                                                            value="<?= $room['num_beds'] ?>" required name="num_beds" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Number of Persons</h5>
                                                    <div>
                                                        <input type="number" id="first-name-column" class="form-control"
                                                            value="<?= $room['num_persons'] ?>" required
                                                            name="num_persons" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5>About</h5>
                                                    <div>
                                                        <textarea type="text" id="first-name-column"
                                                            class="form-control" required
                                                            name="about"><?= $room['about'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Price</h5>
                                                    <div>
                                                        <input type="number" id="first-name-column" class="form-control"
                                                            value="<?= $room['price'] ?>" required name="price" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Rating</h5>
                                                    <div>
                                                        <input type="number" id="first-name-column" class="form-control"
                                                            value="<?= $room['rating'] ?>" max="5" required
                                                            name="rating" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Review</h5>
                                                    <div>
                                                        <input type="number" id="first-name-column" class="form-control"
                                                            value="<?= $room['review'] ?>" required name="review" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Parking</h5>
                                                    <?php if($room['parking'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="parking" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="parking" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Wifi</h5>
                                                    <?php if($room['wifi'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="wifi" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="wifi" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Breakfast</h5>
                                                    <?php if($room['breakfast'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="breakfast" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="breakfast" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Room Service</h5>
                                                    <?php if($room['room_service'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="room_service" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="room_service" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Pool</h5>
                                                    <?php if($room['pool'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="pool" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="pool" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Reception</h5>
                                                    <?php if($room['reception'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="reception" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="reception" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Gym</h5>
                                                    <?php if($room['gym'] == 1) {?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="gym" value="1" checked />
                                                    <?php }else{?>
                                                    <input type="checkbox" id="checkbox12" class="form-check-input"
                                                        name="gym" value="1" />
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <input value="<?= $room['id'] ?>" name="room_id" hidden />
                                        </div>
                                    </div>
                                    <input name="id" value="<?= $User['id'] ?>" hidden />
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="update_room">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>

<?php
require("includes/footer.php");
?>
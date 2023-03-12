<?php
require "controllers/UserController.php";

require "includes/includes_header.php";
require "includes/navBar.php";

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile</h3>
            </div>
        </div>
    </div>
    <?php
require "includes/alert.php";
?>

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
    <!-- Basic Horizontal form layout section start -->

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
                                    <img class="w-100 active" src="../images/hotels/<?=$User['image']?>"
                                        data-bs-target="#Gallerycarousel1" data-bs-slide-to="0" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Information</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?=$User['name']?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?=$User['email']?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Contact</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?=$User['contact']?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?=$User['city']?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Stars</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?=$User['star']?>
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
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="" >
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Name</label>
                                            <input type="text" id="first-name-column" class="form-control"  value="<?=$User['name']?>"  required
                                                placeholder="Name" name="name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">City</label>
                                            <input type="text" id="city" class="form-control" placeholder="City" value="<?=$User['city']?>" required
                                                name="city" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Contact</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                value="<?=$User['contact']?>" required name="contact"
                                                placeholder="Contact" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Stars</label>
                                            <input type="number" id="country-floating" class="form-control"
                                                value="<?=$User['star']?>" required name="star" max="5"
                                                placeholder="Stars" />
                                        </div>
                                    </div>
                                    <input name="id" value="<?=$User['id']?>" hidden />
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="updateProfile" >
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
require "includes/footer.php";
?>
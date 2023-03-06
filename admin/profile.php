<?php
require("controllers/UserController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile</h3>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
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
                                            <?= $User['name'] ?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?= $User['email'] ?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Contact</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?= $User['contact'] ?>
                                        </div>
                                        <div class="col-md-8">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <?= $User['city'] ?>
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
                                            <input type="text" id="first-name-column" class="form-control"  value="<?= $User['name'] ?>"  required
                                                placeholder="Name" name="name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">City</label>
                                            <input type="text" id="city" class="form-control" placeholder="City" value="<?= $User['city'] ?>" required
                                                name="city" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Contact</label>
                                            <input type="text" id="country-floating" class="form-control" value="<?= $User['contact'] ?>" required
                                                name="contact" placeholder="Contact" />
                                        </div>
                                    </div>
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
require("includes/footer.php");
?>
<?php
require("controllers/UserController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Password</h3>
            </div>
        </div>
    </div>
    <?php 
        require("includes/alert.php");
    ?>
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Password</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Old Password</label>
                                            <input type="password" id="first-name-column" class="form-control" required placeholder="Old Password" name="oldPassword" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">New Password</label>
                                            <input type="password" id="city" class="form-control" minlength="8"
                                                placeholder="New Password" required name="password" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Confirm Password</label>
                                            <input type="password" id="country-floating" class="form-control"  required name="cPassword"
                                                placeholder="Confirm Password" minlength="8" />
                                        </div>
                                    </div>
                                    <input name="id" value="<?= $User['id'] ?>" hidden />
                                    <input name="email" value="<?= $User['email'] ?>" hidden />
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="updatePassword">
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
<?php
require("controllers/HotelController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />

<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">
                    Add Hotel
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Logo *: </label>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control" required />
                    </div>
                    <label>Name *: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="name" class="form-control" required />
                    </div>
                    <label>Email *: </label>
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" class="form-control" required />
                    </div>
                    <label>City *: </label>
                    <div class="form-group">
                        <input type="text" placeholder="City" name="city" class="form-control" required />
                    </div>
                    <label>Contact *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Contact" name="contact" class="form-control" required />
                    </div>
                    <label>Stars *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Stars" name="star" max="5" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button class="btn btn-primary ml-1" type="submit" name="add_hotel">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Add</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
        require("includes/alert.php");
    ?>

<div class="page-heading">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#inlineForm">
                        Add hotel
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Stars</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $hotels->fetch_assoc()) {
                            $id = $row['id'];
                            ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['contact'] ?></td>
                            <td><?= $row['city'] ?></td>
                            <td><?= $row['star'] ?></td>
                            <td>
                                <?php if($row['status'] == 'active'){ ?><span
                                    class="badge bg-success">Active</span><?php }else{ ?> <span
                                    class="badge bg-danger">Inactive</span><?php } ?>
                            </td>
                            <td>
                                <?php if($row['status'] == 'active'){ ?>
                                    <a href="?changeStatus=<?=$id?>&status=inactive">
                                        <i class="bi bi-dash-circle"></i>
                                    </a>
                                <?php }else{ ?>
                                    <a href="?changeStatus=<?=$id?>&status=active">
                                        <i class="bi bi-check text-success"></i>
                                    </a>
                                <?php } ?>
                                &nbsp;
                                &nbsp;
                                <a href="?delete=<?=$id?>">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                                &nbsp;
                                &nbsp;
                                <a href="viewHotel.php?id=<?=$id?>">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<?php
require("includes/footer.php");
?>
<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/simple-datatables.js"></script>
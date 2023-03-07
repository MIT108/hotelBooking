<?php
require("controllers/RoomController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />


<!--scrollbar Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Add Room
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
                    <label>Image 2 *: </label>
                    <div class="form-group">
                        <input type="file" name="image2" class="form-control" required />
                    </div>
                    <label>Image 3 *: </label>
                    <div class="form-group">
                        <input type="file" name="image3" class="form-control" required />
                    </div>
                    <label>Name *: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="name" class="form-control" required />
                    </div>
                    <label>Location *: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Location" name="location" class="form-control" required />
                    </div>
                    <label>Price *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Price" name="price" class="form-control" required />
                    </div>
                    <label>Number of beds *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Number of beds" name="num_beds" class="form-control" required />
                    </div>
                    <label>Number of persons *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Number of Persons" name="num_persons" class="form-control" required />
                    </div>
                    <label>About *: </label>
                    <div class="form-group">
                        <textarea placeholder="About" name="about" class="form-control" minlength="10" required ></textarea>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox1" class="form-check-input" name="parking" value="1"
                                checked />
                            <label for="checkbox1">Parking</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox12" class="form-check-input" name="wifi" value="1" checked />
                            <label for="checkbox12">Wifi</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox13" class="form-check-input" name="breakfast" value="1" checked />
                            <label for="checkbox13">Breakfast</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox14" class="form-check-input" name="room_service"
                                value="1" checked />
                            <label for="checkbox14">Room Service</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox15" class="form-check-input" name="pool" value="1"
                                checked />
                            <label for="checkbox15">Pool</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox16" class="form-check-input" name="reception" value="1"
                                checked />
                            <label for="checkbox16">Reception</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox17" class="form-check-input" name="gym" value="1"
                                checked />
                            <label for="checkbox17">Gym</label>
                        </div>
                    </div>
                    <label>Rating *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Rating" name="rating" max="5" class="form-control" required />
                    </div>
                    <label>Review *: </label>
                    <div class="form-group">
                        <input type="number" placeholder="Review" name="review" min="0" class="form-control" required />
                    </div>
                    <input name="hotel_id" value="<?= $User['id']?>" hidden />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button class="btn btn-primary ml-1" type="submit" name="add_room">
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
                        data-bs-target="#exampleModalLong">
                        Add Room
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Review</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $rooms->fetch_assoc()) {
                            $id = $row['id'];
                            ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['location'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['review'] ?></td>
                            <td><?= $row['rating'] ?></td>
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
                                <a href="viewRoom.php?id=<?=$id?>">
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
<?php
require("controllers/ReservationController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />



<div class="page-heading">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Room Name</th>
                            <th>Customer Name</th>
                            <th>Check In</th>
                            <th>Persons</th>
                            <th>Rooms</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservations as $reservation) { ?>
                        <tr>
                            <td><?= $reservation['reservation']['id'] ?></td>
                            <td> 
                                <a href="viewRoom.php?id=<?= $reservation['room']['id'] ?>"><?= $reservation['room']['name'] ?></a>
                            </td>
                            <td><?= $reservation['customer']['fname']." ".$reservation['customer']['lname'] ?></td>
                            <td><?= $reservation['reservation']['check_in'] ?></td>
                            <td><?= $reservation['reservation']['num_people'] ?></td>
                            <td><?= $reservation['reservation']['num_room'] ?></td>
                            <td><?= $reservation['room']['price'] ?> FCFA</td>
                            <td><?= $reservation['room']['price'] * $reservation['reservation']['num_room'] *
                                $reservation['reservation']['num_night'] ?> FCFA</td>
                            <td>
                                <?php if($reservation['reservation']['status'] == 'pending'){ ?>
                                <span class="badge bg-warning">Pending</span>
                                <?php }else if($reservation['reservation']['status'] == 'accepted'){ ?>
                                <span class="badge bg-info">Accepted</span>
                                <?php } else if ($reservation['reservation']['status'] == 'cancelled'){?>
                                <span class="badge bg-danger">Cancelled</span>
                                <?php }else if ($reservation['reservation']['status'] == 'completed'){?>
                                <span class="badge bg-success">Completed</span>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="?changeStatus=<?=$reservation['reservation']['id']?>&status=accepted">
                                    <i class="bi bi-check text-success"></i>
                                </a>
                                &nbsp;
                                &nbsp;
                                <a href="?changeStatus=<?=$reservation['reservation']['id']?>&status=cancelled">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                                &nbsp;
                                &nbsp;
                                <a href="viewRoom.php?id=<?=$reservation['reservation']['id']?>">
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
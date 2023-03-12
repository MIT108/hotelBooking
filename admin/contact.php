<?php   
require("controllers/FaqController.php");

require("includes/includes_header.php");
require("includes/navBar.php");

?>
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />

<?php 
        require("includes/alert.php");
    ?>

<div class="page-heading">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Question</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $contacts->fetch_assoc()) {
                            $id = $row['id'];
                            ?>
                        <tr>
                            <td><?= $row['fname']." ".$row['lname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['question'] ?></td>
                            <td>
                                <a href="?delete_contact=<?=$id?>">
                                    <i class="bi bi-trash text-danger"></i>
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
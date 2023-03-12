<?php   
require("controllers/FaqController.php");

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
                    Add FAQ
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Question *: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Question" name="question" class="form-control" required />
                    </div>
                    <label>Answer *: </label>
                    <div class="form-group">
                        <textarea placeholder="Answer" name="answer" class="form-control" required ></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button class="btn btn-primary ml-1" type="submit" name="add_faq">
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
                        Add FAQ
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $faqs->fetch_assoc()) {
                            $id = $row['id'];
                            ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['question'] ?></td>
                            <td><?= $row['answer'] ?></td>
                            <td>
                                <a href="?delete=<?=$id?>">
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
<?php
      if (isset($_SESSION['success'])) {
      ?>
<div class="alert alert-success alert-dismissible show fade">
    <?= $_SESSION['success'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
        unset($_SESSION['success']);
      } else if (isset($_SESSION['error'])) {
      ?>
<div class="alert alert-danger alert-dismissible show fade">
    <?= $_SESSION['error'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
        unset($_SESSION['error']);
      } ?>
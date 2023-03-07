<?php
if(isset($_GET['logout'])){
    unset($_SESSION['authUser']);
    header("Location: login.php");
}
?>
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <?php if($User['type'] == "hotel"){ ?>
                <div class="logo">
                    <a href="index.php"><img src="../images/hotels/<?= $User['image']?>"
                            alt="../images/hotels/<?= $User['image']?>" srcset="" /></a>
                </div>
                <?php } ?>
                <br />
                <div class="theme-toggle d-flex mt-2 align-items-center">
                    <h6>Welcome! <?= $User['name'] ?></h6>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item active">
                    <a href="index.php" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="hotels.php" class="sidebar-link">
                        <i class="bi bi-shop"></i>
                        <span>Hotels</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="profile.php" class="sidebar-link">
                        <i class="bi bi-pen-fill"></i>
                        <span>Edit Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="password.php" class="sidebar-link">
                        <i class="bi bi-pen-fill"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="rooms.php" class="sidebar-link">
                        <i class="bi bi-view-list"></i>
                        <span>Rooms</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="reservations.php" class="sidebar-link">
                        <i class="bi bi-view-list"></i>
                        <span>Reservations</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a href="?logout" class="sidebar-link">
                        <i class="bi bi-door-closed-fill"></i>
                        <span class="text-danger" >LogOut</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
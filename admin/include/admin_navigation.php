<?php include_once "../db_config.php" ?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class=" nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="bar-chart-2"></span> <?php echo $_SESSION['username'] ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li>
                <a class="dropdown-item" href="#"> Profile</a>
            </li>
            <li>
                <a class="dropdown-item" href="../include/logout.php"> Log Out</a>
            </li>
        </ul>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="../logout.php">Sign out</a>
        </div>
    </div>
</header>
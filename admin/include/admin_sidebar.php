<?php include_once "../db_config.php" ?>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php"
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="user"></span>
              My Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">
              <span data-feather="grid"></span>
              Categories
            </a>
          </li>
          <!-- <div class="dropdown open">
            <a class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                  Dropdown
                </a>
            <div class="dropdown-menu" aria-labelledby="triggerId">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item disabled" href="#">Disabled action</a>
            </div>
          </div> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="shopping-cart"></span> Post Dropdown </a>
            <ul class="dropdown-menu" aria-labelledby="triggerId">
              <li>
              <a class="nav-link" href="product.php?source=view_all_product""> View All Post </a>
              </li>
              <li>
                <a class="nav-link" href="product.php?source=add_product"> Add Post </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="user-plus"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->

      </div>
    </nav>
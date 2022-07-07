<?php include_once "include/admin_header.php"; ?>

<?php include_once "include/admin_navigation.php"; ?>

<?php include_once "include/admin_sidebar.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div> -->
    </div>


    <?php

    if (isset($_GET['source'])) {
        $source = $_GET['source'];
    } else {
        $source = '';
    }

    switch ($source) {
        case 'add_product':
            include "include/add_product.php";
            break;

        case 'edit_product':
            include "include/edit_product.php";
            break;

        case '100':
            echo "Nice 100";
            break;

        case '65':
            echo "Nice 65";
            break;

        default:
            include "include/view_all_product.php";
            break;
    }

    ?>


</main>

<?php include_once "./include/admin_footer.php"; ?>
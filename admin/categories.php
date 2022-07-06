<?php include_once "./include/admin_header.php"; ?>

<?php include_once "./include/admin_navigation.php"; ?>

<?php include_once "./include/admin_sidebar.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <?php

    global $con;

    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {
            echo "This Field should not be empty";
        } else {
            $query = "INSERT INTO categories (categories) 
                        VALUES ('{$cat_title}') ";

            $create_category_query = mysqli_query($con, $query);

            if (!$create_category_query) {
                die('QUERY FAILED' . mysqli_error($con));
            }
        }
    }

    ?>

    <form action="" method="post">
        <h6 for="cat-title">Add Categories</h6>
        <div class="input-group mb-3">
            <input type="text" name="cat_title" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="input-group-btn">
                <button name="submit" class="btn btn-default- btn-primary" type="submit1">
                    Add Categories
                </button>
            </span>
        </div>
    </form>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Categories</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Electronic</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Grocery</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Fashion</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Appliance</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
        </tbody>
    </table>

</main>

<?php include_once "./include/admin_footer.php"; ?>
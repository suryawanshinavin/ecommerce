<?php include_once "./include/admin_header.php";

global $con;

if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE id = {$the_cat_id} ";
    $delete_query = mysqli_query($con, $query);
    header("Location: categories.php");
    exit;

}
// edit query 

// if (isset($_GET['edit'])) {
//     $the_cat_id = $_GET['edit'];
//     $query = "UPDATE FROM categories WHERE id = {$the_cat_id}";
//     $update_query = mysqli_query($con, $query);

// }

?>

<?php include_once "./include/admin_navigation.php"; ?>

<?php include_once "./include/admin_sidebar.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
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
                <button name="submit" class="btn btn-default- btn-primary" type="submit">
                    Add Categories
                </button>
            </span>
        </div>
    </form>

    <table class="table table-responsive table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Categories</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            global $con;

            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($con, $query);

            $categories = mysqli_fetch_all($select_categories, MYSQLI_ASSOC);

            $sl = 0;
            foreach ($categories as $key => $value) {

            ?>

                <tr>

                    <td scope="row"><?php echo ++$sl; ?></td>
                    <td><?php echo $value['categories']; ?></td>
                    <td><?php echo "<a class='nav-link' href='categories.php?delete=$value[id]'>Delete</a>" ?></td>
                    <td><?php echo "<a class='nav-link' href='#'>Edit</a>" ?></td>

                </tr>

            <?php

            }

            ?>
        </tbody>
    </table>

</main>

<?php include_once "./include/admin_footer.php"; ?>
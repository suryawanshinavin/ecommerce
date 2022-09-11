

<table class="table table-bordered table-inverse table-responsive">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Category</th>
            <th>MRP</th>
            <th>Selling Price</th>
            <th>Quantity</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Image</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <?php

            global $con;

            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($con, $query);

            $categories = mysqli_fetch_all($select_categories, MYSQLI_ASSOC);

            $sl = 0;
            foreach ($categories as $key => $value) {
            }
            ?>

            <?php

            global $con;
            $query = "SELECT * FROM product";
            $select_all_product = mysqli_query($con, $query);

            $product = mysqli_fetch_all($select_all_product, MYSQLI_ASSOC);

            $sr = 0;
            foreach ($product as $key => $value) {

            ?>

        <tr>

            <td scope="row"><?= ++$sr ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['categories_id'] ?></td>
            <td><?= $value['mrp'] ?></td>
            <td><?= $value['sell_price'] ?></td>
            <td><?= $value['qty'] ?></td>
            <td><?= $value['short_desc'] ?></td>
            <td><?= $value['description'] ?></td>
            <td><?= $value['image'] ?></td>
            <td><?= $value['status'] ?></td>
            <td><?= $value['post_date'] ?></td>
            <td><?= "<a class='nav-link' href='#'>Edit</a>" ?></td>
            <td><?= "<a class='nav-link' href='product.php?delete=$value[id]'>Delete</a>" ?></td>

        </tr>

    <?php

            }

            global $con;

            if (isset($_GET['delete'])) {
                $the_cat_id = $_GET['delete'];
                $query = "DELETE FROM product WHERE id = {$the_cat_id} ";
                $delete_query = mysqli_query($con, $query);
            }

    ?>

    </tbody>
</table>
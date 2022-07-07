<?php

if (isset($_POST['add_product'])) {
    $product_title = $_POST['product_title'];
    $product_category = $_POST['product_category'];
    $mrp = $_POST['mrp'];
    $sell_price = $_POST['sell_price'];
    $qty = $_POST['qty'];
    $short_desc = $_POST['short_desc'];
    $long_desc = $_POST['long_desc'];

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    $status = $_POST['status'];
    $product_post_date = date('dd-mm-yyyy');

    move_uploaded_file($tmp_image, dirname(dirname(__DIR__)) . "/Images/$image");

    $query = "INSERT INTO product (categories_id, `name`, mrp, sell_price, qty, short_desc, `description`,  `status`, post_date) 
            VALUES ('{$product_category}','{$product_title}','{$mrp}','{$sell_price}','{$qty}','{$short_desc}','{$long_desc}','$status', now())";

    $create_product_query = mysqli_query($con, $query);

    if (!$create_product_query) {
        die('query Failed' . mysqli_error($con));
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <h6 for="title" class="form-label">Product Title</h6>
        <input type="text" class="form-control" name="product_title" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <select name="product_category" id="">
            <!-- <option value="">Select</option> -->
            <?php

            $query = "SELECT * FROM categories ";
            $select_categories = mysqli_query($con, $query);

            if (!$select_categories) {
                die('QUERY FAILED' . mysqli_error($con));
            }

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['id'];
                $cat_title = $row['categories'];

                echo "<option value='{$cat_id}'>{$cat_title}</option>";
            }

            ?>
        </select>
    </div>
    <div class="row">
        <div class="col-6 mb-3">
            <h6 for="" class="form-label">MRP</h6>
            <input type="number" class="form-control" name="mrp" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="col-6 mb-3">
            <h6 for="" class="form-label">Selling Price</h6>
            <input type="number" class="form-control" name="sell_price" id="" aria-describedby="helpId" placeholder="">
        </div>
    </div>
    <div class="mb-3">
        <h6 for="" class="form-label">Quantity</h6>
        <input type="number" class="form-control" name="qty" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <h6 for="" class="form-label">Short Description</h6>
        <input type="text" class="form-control" name="short_desc" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <h6 for="" class="form-label">Long Description</h6>
        <textarea class="form-control" name="long_desc" id="" aria-describedby="helpId" placeholder=""> </textarea>
    </div>
    <div class="mb-3">
        <h6 for="" class="form-label">Image</h6>
        <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <h6 for="" class="form-label">Status</h6>
        <input type="text" class="form-control" name="status" id="" aria-describedby="helpId" placeholder="">
    </div>
    <input name="add_product" type="submit" class="btn border border-dark btn-light mb-3" value="Add Product">
</form>


</main>

<?php include_once "admin_footer.php"; ?>
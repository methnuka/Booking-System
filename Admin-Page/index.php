<?php
@include 'config.php';

if (isset($_POST['add_product'])) {

    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : '';

    if (empty($product_name) || empty($product_price)) {
        $message[] = 'Please fill out all fields';
    } else {
        $insert = "INSERT INTO products (name, price) VALUES ('$product_name', '$product_price')";
        $result = mysqli_query($conn, $insert);

        if ($result) {
            $message[] = 'Product added successfully';
        } else {
            $message[] = 'Failed to add product: ' . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>

    <div class="container">
        <div class="admin-product-form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <h3>Add New Item</h3>
                <input type="text" placeholder="Enter product name" name="product_name" class="box">
                <input type="number" placeholder="Enter the product price" name="product_price" class="box">
                <!-- <input type="file" accept="image/png,image/jpeg,image/ipg" name="product_image" class="box"> -->
                <input type="submit" class="btn" name="add_product" value="Add Product">
            </form>
        </div>

        <?php
        $select = mysqli_query($conn, "SELECT * FROM products");
        ?>

        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?>/-</td>
                        <td>
                        <a href="index-update.php?edit=<?php echo $row['price']; ?>" class="btn"><i class="fas fa-edit"></i>edit</a>
                        <a href="index-index.php?delete=<?php echo $row['price']; ?>" class="btn"><i class="fas fa-trash"></i>delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
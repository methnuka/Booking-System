<?php
@include 'config.php';

$id = $_GET['edit'];
$departure = $_GET['departure'];
$arrival = $_GET['arrival'];
$fare = $_GET['fare'];

if (isset($_POST['update_route'])) {

    if (empty($_POST['departure']) || empty($_POST['arrival']) || empty($_POST['fare'])) {
        $message[] = 'Please fill out all fields';
    } else {
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $fare = $_POST['fare'];
        $id = $_POST['route_id'];

        mysqli_query($conn, "UPDATE routes SET `departure`='$departure', `arrival`='$arrival', `fare`='$fare' WHERE `Id`='$id'");
        header('location:index.php');
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM routes WHERE Id = $id");
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!empty($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . htmlspecialchars($msg) . '</span>';
    }
}
?>

<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <h3>Update Route</h3>
            <input type="text" placeholder="<?php echo htmlspecialchars($departure); ?>" name="departure" class="box" required>
            <input type="text" placeholder="<?php echo htmlspecialchars($arrival); ?>" name="arrival" class="box" required>
            <input type="number" placeholder="<?php echo htmlspecialchars($fare); ?>" name="fare" class="box" required>
            <input type="hidden" name="route_id" value="<?php echo htmlspecialchars($id); ?>">
            <input type="submit" class="btn" name="update_route" value="Update Route">
        </form>
    </div>
</div>

</body>
</html>
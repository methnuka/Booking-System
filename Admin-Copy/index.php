<?php
@include 'config.php';

// Initialize message array
$message = array();

if (isset($_POST['add_route'])) {
    $departure = isset($_POST['departure']) ? $_POST['departure'] : '';
    $arrival = isset($_POST['arrival']) ? $_POST['arrival'] : '';
    $fare = isset($_POST['fare']) ? $_POST['fare'] : '';

    if (empty($departure) || empty($arrival) || empty($fare)) {
        $message[] = 'Please fill out all fields';
    } else {
        // Using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO routes (`departure`, `arrival`, `fare`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $departure, $arrival, $fare);

        if ($stmt->execute()) {
            $message[] = 'Route added successfully';
        } else {
            $message[] = 'Failed to add route: ' . $conn->error;
        }
        $stmt->close();
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
    <title>Admin Page</title>
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
                <h3>Add New Route</h3>
                <input type="text" placeholder="Enter departure point" name="departure" class="box" required>
                <input type="text" placeholder="Enter arrival point" name="arrival" class="box" required>
                <input type="number" placeholder="Enter the fare" name="fare" class="box" required>
                <input type="submit" class="btn" name="add_route" value="Add Route">
            </form>
        </div>

        <?php
        $select = mysqli_query($conn, "SELECT * FROM routes");
        ?>

        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Fare</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                for ($x = 0; $x < $select->num_rows; $x++) {
                    $row = mysqli_fetch_assoc($select);
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['departure']); ?></td>
                        <td><?php echo htmlspecialchars($row['arrival']); ?></td>
                        <td><?php echo htmlspecialchars($row['fare']); ?>/-</td>
                        <td>
                            <a href="index-update.php?edit=<?php echo $row['Id']; ?>&departure=<?php echo $row['departure']; ?>&arrival=<?php echo $row['arrival']; ?>&fare=<?php echo $row['fare']; ?>" class="btn"><i class="fas fa-edit"></i>Edit</a>
                            <a href="index.php?delete=<?php echo $row['Id']; ?>" class="btn"><i class="fas fa-trash"></i>Delete</a>
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

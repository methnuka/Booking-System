<?php
    // Database connection variables
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "bookingsystem";

    // Establish a connection to the database
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Escape special characters in form input
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Validate input fields
        if (empty($email)) {
            echo "Please enter an email address.";
        } elseif (empty($password)) {
            echo "Please enter a password.";
        } else {

            // Query to select user from the database
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $results = mysqli_query($conn, $query);

            // Check if the user exists in the database
            if (mysqli_num_rows($results) == 1) {
                // Redirect to another page if login is successful
                header('Location: http://localhost/Booking-System/index.php/');
                exit(); // Make sure to stop the script after redirection
            } else {
    
                echo 'Wrong username/password combination';
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>

<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "bookingsystem";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email)) {
            echo "Please enter an email address.";
        } elseif (empty($password)) {
            echo "Please enter a password.";
        } else {

            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $results = mysqli_query($conn, $query);

            if (mysqli_num_rows($results) == 1) {
                header('Location: http://localhost/Booking-System/');
                exit(); 
            } else {
    
                echo 'Wrong username/password combination';
            }
        }
    }

    mysqli_close($conn);
?>

<?php
    
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "login_page";
    $db_port = 3306; // Define the port if it's not the default 3306

    
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name, $db_port);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($email)) {
            echo "Please enter an email address.";
        } elseif (empty($password)) {
            echo "Please enter a password.";
        } else {
           
            $hash = password_hash($password, PASSWORD_DEFAULT);

            
            $date_time = date('Y-m-d H:i:s');

           
            $stmt = $conn->prepare("INSERT INTO login_users (email, password, date_time) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $hash, $date_time);

           
            if ($stmt->execute()) {
                echo "You have been registered successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            
            $stmt->close();
        }
    }

   
    mysqli_close($conn);
?>

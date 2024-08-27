<?php 
        $server = "localhost";
        $user = "root";
        $password = "";
        $dbname = "bookingsystem"; 

        $conn = new mysqli($server, $user, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connection successful!";
        }

        $s = "INSERT INTO destination (Depature, Duration, Arrival, Fare) VALUES 
('08:00am<br>Makubura', '01:00h', '09:00am<br>Maharagama', 'LKR 400'),
('12:00pm<br>Makubura', '01:00h', '01:00pm<br>Maharagama', 'LKR 400'),
('04:00pm<br>Makubura', '01:00h', '05:00pm<br>Maharagama', 'LKR 400'),
('08:30am<br>Makubura', '02:00h', '10:30am<br>Piliyandala', 'LKR 550'),
('03:00pm<br>Makubura', '02:00h', '05:00pm<br>Piliyandala', 'LKR 550'),
('07:00am<br>Makubura', '03:00h', '10:00am<br>Galle', 'LKR 1200'),
('07:00pm<br>Makubura', '03:00h', '10:00pm<br>Galle', 'LKR 1200'),
('07:00am<br>Makubura', '03:30h', '10:30am<br>Mathara', 'LKR 1500'),
('01:00pm<br>Makubura', '03:30h', '03:30am<br>Mathara', 'LKR 1500'),
('01:00am<br>Makubura', '04:30h', '05:30am<br>Hambanthota', 'LKR 1800')";


        
        if ($conn->query($s)==TRUE) {
            echo "successful";  	
        }else{
            echo "error";
        }

?>

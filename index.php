<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <style>
       body,
html {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.image {
    margin: auto;
    width: 100%;
    /* background: -webkit-gradient(linear, left top, left bottom, from(rgba(17, 17, 17, 0.7)), to(rgba(17, 17, 17, 0.7))), url('../images/makeup.jpg') no-repeat; */
    background: linear-gradient(rgba(17, 17, 17, 0.7), rgba(17, 17, 17, 0.1)), url('../images/pic.png') no-repeat;
    background-size: cover;
    /* background-attachment: fixed;  */
    background-position: center;
    display: flex;
    min-height: 70vh;
    align-items: center;
    justify-content: center;
    padding-bottom: 0rem;
    transition: background 0.5s ease-in-out;
}

.image-container {
    position: relative;
    text-align: center;
}

.image-container img {
    width: 100%;
    height: fit-content;
}

.image-container h1 {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    position: absolute;
    top: 40%;
    left: 1%;
    transform: translateY(-50%);
    color: white;
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    white-space: nowrap;
}

.ticket-shortcut {
    background: #ffffff;
    position: absolute;
    left: 82%;
    top: 45%;
    transform: translate(-50%, -50%);
    border: 1px solid #000;
    border-radius: 10px;
    padding: 20px;
    font-family: Arial, Helvetica, sans-serif;
    width: fit-content;
    height: fit-content;
    box-sizing: border-box;
}

.transport-medium {
    padding: 5px;
    background-color: #ffffff;
    border: none;
    border-radius: 5px;
}

.transport-medium:hover {
    background-color: black;
    color: #ffffff;
}

.flex-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.destination-label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="time"],
select {
    width: 100%;
    padding: 7px;
    background-color: #c7c3c3;
    border-radius: 5px;
    box-sizing: border-box;
    font-family: 'Lucida Console', monospace;
    border: 1px solid #000;
    /* Added border to match */
}

.search-ticket {
    margin-top: 10px;
    width: 100%;
    padding: 10px;
    background-color: #000000;
    border-radius: 5px;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover,
.search-ticket:hover {
    background-color: #817e7e;
    color: #000;
}

.error-message {
    color: red;
    font-size: 14px;
}

.display-block {
    display: flex;
    justify-content: space-between;
    border: 3px solid #000;
    border-radius: 5px;
    padding: 10px;
    width: 70%;
    height: 70px;
    margin: 0 auto;
    margin-top: 50px;
}

.display-element {
    padding: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.search-ticket-displayBlock {
    margin-top: 10px;
    width: 100%;
    padding: 15px;
    padding-left: 30px;
    padding-right: 30px;
    background-color: #000000;
    border-radius: 5px;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.search-ticket-displayBlock:hover {
    background-color: #817e7e;
    color: #000;
}
.lable-block{
    display: flex;
    justify-content: space-between;
    background-color: #D9D9D9;
    border-radius: 5px;
    padding: 10px;
    width: 70%;
    height: 50px;
    margin: 0 auto;
    margin-top: 50px;
}

.lable-colomn{
    padding: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-left: 40px;
}
.lable-elementBlock{
    display: flex;
    justify-content: space-between;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 10px;
    width: 70%;
    height: 50px;
    margin: 0 auto;
    margin-top: 50px;
}



.box {
    float: left;
    background-color: lightskyblue;
    color: white;
    width: 125px;
    line-height: 125px;
    text-align: center;
    margin: 10px;
    display: none;
}

.show {
    display: block;
}

.btn {
    border: none;
    outline: none;
    margin-bottom: 20px;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.lable-colomn button {
    margin-top: -20px;
    margin-right: 10px;
    width: 100%;
    padding: 15px;
    padding-left: 30px;
    padding-right: 30px;
    background-color: #000000;
    border-radius: 5px;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.lable-colomn button:hover {
    background-color: #817e7e;
    color: #000;
}
    </style>
    <script><?php include("script.js");?></script>
</head>

<body>
    <div class="image-container">
        <div class="image"></div>
        <h1 class="overlay-text">Your Travelling Satisfaction<br>will be taken for consideration!</h1>
        <div>
    <div class="ticket-shortcut">
            <form action="" method="POST" id="ticket-shortcut">
                <div class="flex-container">
                    <button class="transport-medium"><i class="fa fa-train" style="font-size:36px;"></i></button>
                    <button class="transport-medium"><i class="fa fa-bus" style="font-size:36px;"></i></button>
                </div>
                <label class="destination-label" style="margin-right:150px;"><b>Destination</b></label>
                <select name="Destination" id="destination">
                    <option value="Maharagama">Maharagama</option>
                    <option value="Piliyandala">Piliyandala</option>
                    <option value="Galle">Galle</option>
                    <option value="Mathara">Mathara</option>
                    <option value="Hambanthota">Hambanthota</option>
                </select>
                <div id="destinationError" class="error-message"></div>
                <div class="flex-container" style="margin-top:10px;">
                    <input type="date" name="date" id="date">
                    <input type="time" name="time" id="time" style="margin-left:5px;">
                </div>
                <div class="flex-container">
                    <div id="dateError" class="error-message"></div>
                    <div id="timeError" class="error-message"></div>
                </div>
                <div class="flex-container">
                    <label for="date"><b>Departure Date</b></label>
                    <label for="time"><b>Departure Time</b></label>
                </div>
                <input type="submit" onclick="searchTicket()" value="Search Ticket" class="search-ticket" name="submit">
            </form>
        </div>
    </div>
    </div>
    <div>
        <div class="display-block">
            <div class="display-element" style="margin-top: 10px;">
                <label><b>Makubura &harr;</b></label>
                <b><div style="display:inline-block" id="cityDisplay"><label> City </label></div></b>
            </div>
            <b><div class="display-element" id="dateDisplay" style="margin-top: 10px;"><lable><i class="fa fa-calendar"></i> DD / MM / YY </lable></div></b>
            <div class="display-element" style="margin-top: -18px;">
                <button onclick="searchTicket()" value="Search" class="search-ticket-displayBlock" name="submit">Search</button>
            </div>
        </div>
    </div>
    <div>
        <?php

        $server = "localhost";
        $user = "root";
        $password = "";
        $dbname = "bookingsystem"; 
        $conn = new mysqli($server, $user, $password, $dbname);

        if (isset($_POST['submit'])) {
            $search = $_POST['Destination'];
            $sql = "SELECT * FROM destination WHERE Arrival LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                echo '<div class="lable-block">
                <div class="lable-colomn"><lable><b>From</b></lable></div>
                <div class="lable-colomn"><lable><b>Duration</b></lable></div>
                <div class="lable-colomn"><lable><b>To</b></lable></div>
                <div class="lable-colomn"><lable><b>Fare</b></lable></div>
            </div>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="lable-elementBlock">
                        <div class="lable-colomn">' . $row['Depature'] . '</div>
                        <div class="lable-colomn">' . $row['Duration'] . '</div>
                        <div class="lable-colomn">' . $row['Arrival'] . '</div>
                        <div>
                        <div class="lable-colomn">' . 'LKR ' . $row['Fare'] . '</div>
                        <div class="lable-colomn">
                            <form method="POST" action="http://localhost/Booking-System/booking_page/index.php/">
                                <input type="hidden" name="arrival" value="' . htmlspecialchars($row['Arrival']) . '">
                                <input type="hidden" name="fare" value="' . htmlspecialchars($row['Fare']) . '"> 
                                <button type="submit">Book</button>
                            </form>
                        </div>
                        </div>
                        
                    </div>
                    <hr style="border: 2px solid black;width:80%;margin-top: 75px;">';
            }
            }else{
                echo '<h2>Data not found</h2>';
            }
        }
        ?>
    </div>
</body>

</html>
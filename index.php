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




.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 92%;
    margin: 0 auto;
    padding: 16px 0;
    background-color: white;
}

.logo {
    width: 88px;
    cursor: pointer;
    background:  url('images\Group 48.png') no-repeat;
}

.nav-links {
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    background-color: white;
    display: flex;
    align-items: center;
    padding: 20px;
    transition: top 0.5s ease-in-out;
}

.nav-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-list li a {
    text-decoration: none;
    color: black;
    transition: color 0.3s;
}

.nav-list li a:hover {
    color: gray;
}

.auth-actions {
    display: flex;
    align-items: center;
    gap: 24px;
}

.signin-btn {
    background-color: #a6c1ee;
    color: white;
    padding: 10px 40px;
    border-radius: 9999px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

.signin-btn:hover {
    background-color: #87accc;
}

.menu-icon {
    font-size: 24px;
    cursor: pointer;
}

@media screen and (min-width: 768px) {
    .nav-links {
        position: static;
        min-height: auto;
        display: flex;
        flex-direction: row;
    }

    .nav-list {
        flex-direction: row;
        gap: 4vw;
    }
}



@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body {
    line-height: 1.5;
}

.container {
    align-items: center;
    justify-items: space-between;
    width: 100%;
    padding-left: 50px;
    padding-right: 50px;
}

.row {
    display: flex;
    /* flex-wrap: wrap; */
    align-items: center;
    justify-content: space-between;
}

.word {
    text-align: center;
    color: white;
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    margin-bottom: 20px;
}

#input-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

#uniqueImageId {
    width: 200px;
    height: 100px;
    transform: translateX(-30px);
}

ul {
    list-style: none;
}

.footer {
    background-color: #24262b;
    padding: 0;
    height: 100%;
    width: auto;
    padding-bottom: 20px;
}

.footer-col {
    width: 25%;
    padding-bottom: 30px;
    padding-top: 30px;
    transform: translateX(100px);
}

.footer-col2 {
    width: 25%;
    padding-bottom: 50px;
    transform: translateY(-10px);
}

.footer-col2 h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}

.footer-col2 h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col2 ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col2 ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}

.footer-col2 ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

.footer-col2 .social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

.footer-col2 .social-links a:hover {
    color: #24262b;
    background-color: #ffffff;
}

.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

.footer-col .social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

.footer-col .social-links a:hover {
    color: #24262b;
    background-color: #ffffff;
}

.footer-bottom {
    margin-top: 100px;
}

.footer-bottom a {
    color: white;
    text-decoration: underline;
    display: block;
    margin-bottom: 10px;
}

#footer-bottom p {
    color: white;
    margin: 5px 0;
}

.footerrule {
    height: 0.1px;
    width: 93%;
}

.footerrule2 {
    height: 2px;
    background-color: white;
    width: 93%;
}

.email {
    display: flex;
    align-items: center;
    width: 330px;
    border: none;
    outline: none;
}

.email input[type="email"] {
    padding: 10px;
    border: 1.5px solid #ccc;
    border-radius: 20px 0 0 20px;
    /* Rounded corners for the left side */
    outline: none;
    flex: 1;
}

.email button {
    padding: 10px 20px;
    border-left: none;
    border-radius: 0 20px 20px 0;
    /* Rounded corners for the right side */
    background-color: #374360;
    color: white;
    cursor: pointer;
    outline: none;
    border: none;
}

.email button:hover {
    background-color: #0056b3;
}

.heading2 {
    font-size: 15px;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 20px;
    font-family: 'Poppins', sans-serif;
}

.line {
    height: 1px;
}

.heading4 {
    font-size: 10px;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 20px;
    font-family: 'Poppins', sans-serif;
}

.categories {
    justify-content: space-between;
    font-family: 'Poppins', sans-serif;
    font-size: 5px;
    color: #ffffff;
}

.main-div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    font-family: 'Poppins', sans-serif;
    padding-top: 20px;
    font-size: 13px;
    color: #8a8a8a;
}

.left-column {
    flex: 1;
    text-align: left;
    padding: 5px;
    font-family: 'Poppins', sans-serif;
}

.right-column {
    flex: 1;
    text-align: right;
    display: flex;
    justify-content: flex-end;
    gap: 20px;
    font-family: 'Poppins', sans-serif;
    margin-right: 50px;
}

.privacy-policy,
.terms-conditions {
    padding: 5px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}

.privacy-policy:hover,
.terms-conditions:hover {
    text-decoration: underline;
    color: white;
    transition: all;
}


/*responsive*/

@media(max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media(max-width: 574px) {
    .footer-col {
        width: 100%;
    }
}
    </style>
    <script><?php include("script.js");?></script>
</head>

<body>
    <header class="bg-white">
        <nav class="navbar">
            <div>
                <img class="logo" src="/images/Group 48.png" alt="Logo">
            </div>
            <div class="nav-links">
                <ul class="nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="auth-actions">
                <button class="signin-btn">Sign In</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="menu-icon"></ion-icon>
            </div>
        </nav>
    </header>
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
            <b>
                <div style="display:inline-block" id="cityDisplay">
                    <label>
                        <?php echo isset($_SESSION['destination']) ? htmlspecialchars($_SESSION['destination']) : 'City'; ?>
                    </label>
                </div>
            </b>
        </div>
        <b>
            <div class="display-element" id="dateDisplay" style="margin-top: 10px;">
                <label>
                    <i class="fa fa-calendar"></i> 
                    <?php echo isset($_SESSION['date']) ? htmlspecialchars($_SESSION['date']) : 'DD / MM / YY'; ?>
                </label>
            </div>
        </b>
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
            $_SESSION['destination'] = $_POST['Destination'];
            $_SESSION['date'] = $_POST['date'];
            $_SESSION['time'] = $_POST['time'];
            
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
            } else {
                echo '<h2>Data not found</h2>';
            }
        }
        ?>

    </div>

    <footer class="footer">



        <div class="container">
            <div class="container1">
                <img src="/images/booking2-removebg-preview.png" id="uniqueImageId"></a>
                <hr class="footerrule2" />

            </div>

            <div class="row">
                <div class="container2">
                    <div class="word">
                        <h2 class="heading2">stay in the loop and sign up for the booking</h2>

                        <div class="email">
                            <input type="email" placeholder="Enter your email">
                            <button>➔</button>
                        </div>

                    </div>
                </div>

                <div class="footer-col">

                    <h4 class="heading4">online shopping</h4>
                    <ul>
                        <li class="categories"><a href="http://">watch</a></li>
                        <li class="categories"><a href="http://">bag</a></li>
                        <li class="categories"><a href="http://">shoes</a></li>
                        <li class="categories"><a href="http://">drinks</a></li>
                    </ul>
                </div>
                <div class="footer-col2">
                    <h4 class="heading4">follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
            <hr class="footerrule" />

            <div class="main-div">
                <div class="left-column">
                    &copy; 2024 Bookin
                </div>
                <div class="right-column">
                    <div class="privacy-policy">
                        Privacy Policy
                    </div>
                    <div class="terms-conditions">
                        Terms and Conditions
                    </div>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>
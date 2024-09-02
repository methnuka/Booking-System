<?php include("sever.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="#" class="logo">Bookin</a>
        </nav>
    </header>
    <div class="container">
        <div class="image-column">
            <img src="signin.jpg" alt="Image description">
        </div>
        <div class="login-column">
            <h1>Create New Account</h1>
            <hr class="centered-line">
            <h3>Customer Details</h3>
            <form method="POST">
                <label for="First">First Name</label>
                <input type="text" id="First Name" name="First_Name" >
                <label for="Last">Last Name</label>
                <input type="text" id="Last Name" name="Last_Name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <button type="submit">SIGN IN</button>
                <a href="http://localhost/Booking-System/login/">Already have an account</a>
            </form>
            
        </div>
    </div>

    <footer class = "footer">
        <div class="containers">
            <div class="logo"> <h2> Bookin </h2></div>
            <hr width="100%">
            <br>

            <div class="row">
                
                <div class="footer-col">
                    <h4>Follow US</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>

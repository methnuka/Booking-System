<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    
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
            <img src="1.jpg" alt="Image description">
        </div>
        <div class="login-column">
            <h1>Login Page</h1>
            <form id="login-form" method="post" onsubmit="return login()">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email address" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
                
                <button type="submit">LOG IN</button>
            </form>
            <a href="http://localhost/Booking-System/sign-up/">Dont have an account</a>
            <div class="error-message" id="error-message"></div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="containers">
            <div class="logo"> <h2> Bookin </h2></div>
            <hr width="100%">
            <br>

            <div class="row">
                <div class="footer-col">
                    <h4>Stay in the loop and sign up for the booking</h4>
                    <form>
                        <input type="email" placeholder="Enter Your email">
                    </form>
                </div>
                
                <div class="footer-col">
                    <h4>Follow Us</h4>
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
    <script>
        function login() {
            var loginemail = document.getElementById("email").value;
            var loginpassword = document.getElementById("password").value;
            var error = document.getElementById("error-message");

            error.textContent = ""; 

            if (loginemail.trim() === "" || loginpassword.trim() === "") {
                error.textContent = "Please enter both email and password.";
                return false;
            }

            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(loginemail)) {
                error.textContent = "Please enter a valid email address.";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

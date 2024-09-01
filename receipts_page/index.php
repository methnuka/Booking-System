<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .receipt-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .receipt-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .receipt-container h2 {
            text-align: center;
            font-size: 20px;
            margin: 10px 0;
            font-weight: normal;
        }
        .receipt-container .details {
            margin-bottom: 20px;
        }
        .receipt-container .details p {
            margin: 5px 0;
        }
        .receipt-container .details p strong {
            display: inline-block;
            width: 150px;
        }
        .receipt-container .total {
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
        }
        .receipt-container .download-btn {
            display: block;
            width: 100%;
            text-align: center;
            background: #000;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background 0.3s ease;
        }
        .receipt-container .download-btn:hover {
            background: #333;
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <h1>Ticket Confirmation</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       
  
        $selected_seats = $_POST['selected_seats'];
        $seat_numbers = $_POST['seat_numbers'];
        $ticket_price = $_POST['ticket_price'];

     
    
        echo "<div class='details'>";
       
        echo "<p><strong>Seat Numbers:</strong> " . htmlspecialchars($seat_numbers) . "</p>";   
        echo "<hr>";
        echo "<p><strong>" . htmlspecialchars($selected_seats) . " Seat(s):</strong> RS. " . htmlspecialchars($ticket_price) . "/=</p>";
        echo "<p><strong>Service Fee:</strong> RS. 00.00/=</p>";
        echo "<hr>";
        echo "<p class='total'><strong>TOTAL (incl. VAT):</strong> RS. " . htmlspecialchars($ticket_price) . "/=</p>";
        echo "</div>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>

    <a href="#" class="download-btn">Download Receipt</a>
</div>

</body>
</html>

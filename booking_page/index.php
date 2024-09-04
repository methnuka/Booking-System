<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket Booking</title>
    <!--Google Fonts and Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f0f0f0; /* Optional: background color */
}

.center {
    width: 80%; /* Takes 80% of the screen width */
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    max-width: 1200px; /* Optional: Set a maximum width */
}

.tickets {
    width: 80%;
    height: fit-content;
    border: 0.4mm solid rgba(0, 0, 0, 0.08);
    border-radius: 3mm;
    box-sizing: border-box;
    padding: 20px; /* Increased padding */
    font-family: 'Poppins', sans-serif;
    max-height: 96vh;
    overflow: auto;
    box-shadow: 0px 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.ticket-selector {
    background: rgb(243, 243, 243);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    box-sizing: border-box;
    padding: 20px;
}

.inf {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px; /* Increased margin for spacing */
    font-size: 18px; /* Set font size */
}

.seat-numbers, .count, .amount {
    font-weight: normal;
    text-align: right;
    font-family: 'Poppins', sans-serif; /* Ensure font family consistency */
    font-size: 18px; /* Ensure consistent font size */
}

.count, .amount {
    margin-left: 5px; /* Bring the numbers closer to the labels */
}

.inf span {
    font-weight: 600;
}

.seat-numbers {
    margin-left: 5px; /* Bring the seat numbers closer to "Tickets" */
}

.price {
    width: 100%;
    box-sizing: border-box;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid rgba(0, 0, 0, 0.08);
}

.total {
    display: flex;
    flex-direction: column;
    background-color: rgb(137, 144, 152);
    padding: 20px; /* Reduced padding */
    border-radius: 5px;
    color: white;
    font-size: 18px; /* Set consistent font size */
    width: 100%;
    box-sizing: border-box;
    margin-top: 70px;
}

.total span {
    font-size: 18px;
    font-weight: 400;
}

.price button {
    background: rgb(60, 60, 60);
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 16px; /* Increased button font size */
    padding: 10px 20px; /* Increased padding for the button */
    border-radius: 2mm;
    outline: none;
    border: none;
    cursor: pointer;
    margin-top: 20px;
}

.container {
    display: flex;
    flex-direction: row;
    gap: 30px;
    width: 100%;
    justify-content: space-between;
}

.head {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
}

.information-box{
    margin-top: 130px;
    margin-right: 200px;
    font-size: 18px;
}
.title {
    font-size: 23px;
    font-weight: 600;
    margin-right: 20px;
}

.information{
    font-size:18px;
}

.vl{
    border-left: 3px solid black;
    height: 50px;
    width: 3px;
    margin-left: -50px;

}

.seats {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    min-height: 150px;
    position: relative;
    padding: 20px; /* Increased padding */
}

.status {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-bottom: 20px;
    flex-direction: row;
    gap: 20px;
    font-size: 18px; /* Increased font size for status items */
}

.item {
    font-size: 18px;
    position: relative;
}

.item::before {
    content: "";
    position: absolute;
    top: 50%;
    left: -12px;
    transform: translate(0, -50%);
    width: 10px;
    height: 10px;
    background: rgb(255, 255, 255);
    outline: 0.2mm solid rgb(120, 120, 120);
    border-radius: 0.3mm;
}

.item:nth-child(2)::before {
    background: rgb(180, 180, 180);
    outline: none;
}

.item:nth-child(3)::before {
    background: rgb(28, 185, 120);
    outline: none;
}

.all-seats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 40px; /* Increased gap between seats */
    margin: 20px 0;
    position: relative;
}

.seat {
    width: 30px; /* Increased seat size */
    height: 30px;
    background: white;
    border-radius: 1mm;
    outline: 0.3mm solid rgb(180, 180, 180);
    cursor: pointer;
}

.all-seats input:checked+label {
    background: rgb(28, 185, 120);
    outline: none;
}

.seat.booked {
    background: rgb(180, 180, 180);
    outline: none;
}

input {
    display: none;
}

.information-item {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-left: -40px;
}

.symbol {
    margin-left: -18px; /* Adjust if needed */
    font-size: 18px; /* Adjust symbol size if needed */
}
    </style>
</head>

<body>
    <div class="center">
        <div class="tickets">
            <div class="container">
                <div>
                    <div class="seats">
                        <div class="status">
                            <div class="item">Available</div>
                            <div class="item">Booked</div>
                            <div class="item">Selected</div>
                        </div>
                        <div class="all-seats"></div>
                    </div>
                </div>
                <div class="price">
                <div class="information-box">
                    <div class="title"><lable>Reservation</lable></div>
                    <hr style="border: 2px solid black; width: 100%; margin: 10px auto;">
                    <div class="information-item">
                        <div class="symbol">&#x26AA;</div>
                        <label>Makubura</label>
                    </div>
                    <div class="vl"></div>
                    <div class="information-item">
                        <div class="symbol">&#x26AB;</div>
                        <div class="information">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset($_POST['arrival'])) {
                                    $arrival = $_POST['arrival'];
                                    echo "<label>Arrival: $arrival</label>";
                            } else {
                                    echo "<h2>No arrival data received</h2>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <form action="http://localhost/Booking-System/receipts_page/" method="POST">
                    <div class="total">
                        <div class="inf">
                            <span>Selected seats</span>
                            <span><span class="count">0</span> tickets</span>
                            <input type="hidden" name="selected_seats" class="hidden-seats" value="0">
                        </div>
                        <div class="inf">
                            <span>Seat number</span>
                            <span class="seat-numbers"></span>
                            <input type="hidden" name="seat_numbers" class="hidden-seat-numbers" value="">
                        </div>
                        <div class="inf">
                            <span>Ticket Price</span>
                            <span><span class="amount">0</span> RS</span>
                            <input type="hidden" name="ticket_price" class="hidden-ticket-price" value="0">
                        </div>
                    </div>
                        <button type="submit">Book</button>
                </form>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector("form");
        const selectedSeatsInput = document.querySelector(".hidden-seats");
        const seatNumbersInput = document.querySelector(".hidden-seat-numbers");
        const ticketPriceInput = document.querySelector(".hidden-ticket-price");

        form.addEventListener("submit", (event) => {
            // Update hidden inputs with actual values
            selectedSeatsInput.value = document.querySelector(".count").textContent;
            seatNumbersInput.value = document.querySelector(".seat-numbers").textContent;
            ticketPriceInput.value = document.querySelector(".amount").textContent;
        });
    });
</script>
                    
                </div>
                
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
    let seats = document.querySelector(".all-seats");

    // Generate seats dynamically
    for (let i = 0; i < 23; i++) {
        let randint = Math.floor(Math.random() * 2);
        let booked = randint === 1 ? "booked" : "";
        let seatNumber = String.fromCharCode(65 + Math.floor(i / 4)) + (i % 4 + 1); // Generate seat number (A1, A2, ...)
        
        // Add the input element with disabled attribute if booked
        seats.insertAdjacentHTML(
            "beforeend",
            `<input type="checkbox" name="tickets" id="s${i + 2}" ${booked ? "disabled" : ""}/>
            <label for="s${i + 2}" class="seat ${booked}" data-seat="${seatNumber}"></label>`
        );
    }

    let tickets = seats.querySelectorAll("input:not([disabled])"); // Select only non-disabled tickets
    let selectedSeats = [];
    const ticketPrice = 400; // Price per ticket

    tickets.forEach((ticket) => {
        ticket.addEventListener("change", () => {
            let amount = Number(document.querySelector(".amount").textContent);
            let count = Number(document.querySelector(".count").textContent);
            let seatNumber = ticket.nextElementSibling.getAttribute("data-seat");

            if (ticket.checked) {
                count += 1;
                amount += ticketPrice;
                selectedSeats.push(seatNumber);
            } else {
                count -= 1;
                amount -= ticketPrice;
                selectedSeats = selectedSeats.filter(seat => seat !== seatNumber);
            }

            document.querySelector(".amount").textContent = amount;
            document.querySelector(".count").textContent = count;

            // Update selected seat numbers
            document.querySelector(".seat-numbers").textContent = selectedSeats.join(', ');
        });
    });
});
    </script>
</body>

</html>
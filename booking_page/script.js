document.addEventListener("DOMContentLoaded", () => {
    let seats = document.querySelector(".all-seats");

    // Generate seats dynamically
    for (let i = 0; i < 23; i++) {
        let randint = Math.floor(Math.random() * 2);
        let booked = randint === 1 ? "booked" : "";
        let seatNumber = String.fromCharCode(65 + Math.floor(i / 4)) + (i % 4 + 1); // Generate seat number (A1, A2, ...)
        seats.insertAdjacentHTML(
            "beforeend",
            `<input type="checkbox" name="tickets" id="s${i + 2}" />
             <label for="s${i + 2}" class="seat ${booked}" data-seat="${seatNumber}"></label>`
        );
    }

    let tickets = seats.querySelectorAll("input");
    let selectedSeats = [];
    const ticketPrice = 200; // Price per ticket

    tickets.forEach((ticket) => {
        ticket.addEventListener("change", () => {
            let amount = Number(document.querySelector(".amount").innerHTML);
            let count = Number(document.querySelector(".count").innerHTML);
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

            document.querySelector(".amount").innerHTML = amount;
            document.querySelector(".count").innerHTML = count;

            // Update selected seat numbers
            document.querySelector(".seat-numbers").innerHTML = selectedSeats.join(', ');
        });
    });
});
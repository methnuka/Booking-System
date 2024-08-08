// Sample bus bookings data
const busBookings = [
    { date: '2024-08-04', time: '10:00', destination: 'New York', busNumber: 'NY123', availableSeats: 15 },
    { date: '2024-08-04', time: '12:00', destination: 'Boston', busNumber: 'BO456', availableSeats: 0 },
    { date: '2024-08-05', time: '14:00', destination: 'Chicago', busNumber: 'CH789', availableSeats: 20 },
    { date: '2024-08-06', time: '09:00', destination: 'San Francisco', busNumber: 'SF012', availableSeats: 5 },
];

// Function to filter bus bookings based on user input
function filterBusBookings() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const destination = document.getElementById('destination').value.toLowerCase();

    const filteredBookings = busBookings.filter(booking => {
        return (!date || booking.date === date) &&
            (!time || booking.time === time) &&
            (!destination || booking.destination.toLowerCase().includes(destination));
    });

    displayResults(filteredBookings);
}

// Function to display filtered results
function displayResults(filteredBookings) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    if (filteredBookings.length > 0) {
        filteredBookings.forEach(booking => {
            const bookingDiv = document.createElement('div');
            bookingDiv.className = 'result-item';
            bookingDiv.textContent = `Date: ${booking.date}, Time: ${booking.time}, Destination: ${booking.destination}, Bus Number: ${booking.busNumber}, Available Seats: ${booking.availableSeats}`;
            resultsDiv.appendChild(bookingDiv);
        });
    } else {
        resultsDiv.textContent = 'No buses found for the given criteria.';
    }
}

// Function to handle booking
function handleBooking(event) {
    event.preventDefault();

    const bookDate = document.getElementById('bookDate').value;
    const bookTime = document.getElementById('bookTime').value;
    const bookDestination = document.getElementById('bookDestination').value.toLowerCase();

    const selectedBooking = busBookings.find(booking => {
        return booking.date === bookDate &&
            booking.time === bookTime &&
            booking.destination.toLowerCase() === bookDestination &&
            booking.availableSeats > 0;
    });

    const confirmationDiv = document.getElementById('bookingConfirmation');
    if (selectedBooking) {
        selectedBooking.availableSeats--;
        confirmationDiv.textContent = `Booking confirmed! Bus Number: ${selectedBooking.busNumber}. Seats remaining: ${selectedBooking.availableSeats}.`;
    } else {
        confirmationDiv.textContent = 'No available seats for the selected booking.';
    }
}

// Attach event listeners
document.getElementById('filterForm').addEventListener('input', filterBusBookings);
document.getElementById('bookingForm').addEventListener('submit', handleBooking);
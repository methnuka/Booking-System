document.getElementById('ticket-shortcut').addEventListener('submit', function(event) {
    event.preventDefault();
    searchTicket();
});

function searchTicket(){
    var destinationInput = document.getElementById("destination").value;
    var destinationError = document.getElementById("destinationError");
    var dateInput = document.getElementById("date").value;
    var dateError = document.getElementById("dateError");
    var timeInput = document.getElementById("time").value;
    var timeError = document.getElementById("timeError");

    destinationError.textContent = "";
    dateError.textContent = "";
    timeError.textContent = "";

    if(destinationInput.trim() == ""){
        destinationError.textContent = "Please Enter Destination";
    }
    if(dateInput.trim() == ""){
        dateError.textContent = "Enter Date";
    }
    if(timeInput.trim() == ""){
        timeError.textContent = "Enter Time";
    }

    var distinationDisplay = document.getElementById("cityDisplay");
    var dateDisplay = document.getElementById("dateDisplay");

    if(destinationInput.trim()==""){
    }else{
        distinationDisplay.textContent = destinationInput;
    }
    if(dateInput.trim()==""){

    }else{
        dateDisplay.textContent = dateInput;
    }

}

function onToggleMenu(e) {
    const links = document.querySelector('.nav-links');
    e.name = e.name === 'menu' ? 'close' : 'menu';
    if (links.style.top === '0%') {
        links.style.top = '-100%';
    } else {
        links.style.top = '0%';
    }
}





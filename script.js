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

function filterObjects(c) {
    var x, i;
    x = document.getElementsByClassName("box");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
    }
}

function addClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function removeClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) >= 0) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}




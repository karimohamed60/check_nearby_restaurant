var x = document.getElementById("button");

//This function is used to get location and show errors if occurs.
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    }else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}


//This function is used to write latitude and longitude of user's location in header of browser(to save it in variables).
function showPosition(position) {
    window.location.href='nearest-restaurant?lat='+position.coords.latitude+'&lng='+position.coords.longitude;
}


//This function is used to show errors
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
        break;

        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
        break;

        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
        break;

    }
}


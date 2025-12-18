document.querySelector("form").addEventListener("submit", function (event) {

    let fname = document.getElementById("fname").value.trim();
    let lname = document.getElementById("lname").value.trim();
    let email = document.getElementById("email").value.trim();
    let zip = document.getElementById("zip").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let state = document.getElementById("state").value;
    let donation = document.querySelector('input[name="da"]:checked');

    if (fname === "") {
        alert("First Name is required");
        event.preventDefault();
        return;
    }

    if (lname === "") {
        alert("Last Name is required");
        event.preventDefault();
        return;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        event.preventDefault();
        return;
    }

    if (state === "Select a State") {
        alert("Please select a state");
        event.preventDefault();
        return;
    }

    if (zip !== "" && isNaN(zip)) {
        alert("Zip Code must be numeric");
        event.preventDefault();
        return;
    }

    if (phone !== "" && isNaN(phone)) {
        alert("Phone number must be numeric");
        event.preventDefault();
        return;
    }

    if (!donation) {
        alert("Please select a donation amount");
        event.preventDefault();
        return;
    }

    alert("Form submitted successfully ✅");

});

function validateForm() {
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('span[id^="error"]').forEach(el => el.innerText = '');

    const name = document.getElementById("first-name").value.trim();
    const lastName = document.getElementById("last-name").value.trim();
    const email = document.getElementById("email").value.trim();
    const amount = document.getElementById("donation-amount").value.trim();

    if (name === "") {
        document.getElementById("error-name").innerText = "First name is required.";
        isValid = false;
    }
    if (lastName === "") {
        document.getElementById("error-lastName").innerText = "Last name is required.";
        isValid = false;
    }
    if (email === "") {
        document.getElementById("error-email").innerText = "Email is required.";
        isValid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById("error-email").innerText = "Invalid email format.";
        isValid = false;
    }
    if (amount === "") {
        document.getElementById("error-amount").innerText = "Donation amount is required.";
        isValid = false;
    } else if (isNaN(amount) || parseFloat(amount) <= 0) {
        document.getElementById("error-amount").innerText = "Enter a valid donation amount.";
        isValid = false;
    }

    return isValid;
}
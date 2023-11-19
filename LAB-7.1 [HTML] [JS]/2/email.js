function validateEmail() {
    let email = document.getElementById('email').value;

    if (email === "") {
        alert("Email must be filled out");
        return false;
    } else if (!email.includes('@') || !email.includes('.')) {
        alert("Email must be valid");
        return false;
    } else if (email.indexOf('@') === 0 || email.indexOf('.') === 0 || email.lastIndexOf('.') < email.indexOf('@')) {
        alert("Email format is not valid");
        return false;
    } else {
        alert("Email: " + email);
        return true;
    }
}

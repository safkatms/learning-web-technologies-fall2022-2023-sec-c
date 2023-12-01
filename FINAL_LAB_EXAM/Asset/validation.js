function registration() {
    let username = document.getElementById('username').value;
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let cPassword = document.getElementById('cPassword').value;

    if (username === '') {
        alert("Username must be filled out");
        return false;
    }
    if (name === '') {
        alert("Name must be filled out");
        return false;
    }
    if (password === '') {
        alert("Password must be filled out");
        return false;
    }
    if (cPassword === '') {
        alert("Confirm Password must be filled out");
        return false;
    }
    if (password !== cPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}

function registration() {
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let cPassword = document.getElementById('cPassword').value;

    // Perform validation checks here
    if (name === '' || phone === '' || email === '' || password === '' || cPassword === '') {
        alert('All fields must be filled out');
        return false;
    }

    if (password !== cPassword) {
        alert('Passwords do not match');
        return false;
    }

    

   
}

function checkEmailAvailability() {
    let email = document.getElementById('email').value;

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../Controller/emailCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h6').innerHTML = this.responseText;
        }
    };
    xhttp.send('email=' + email);
}





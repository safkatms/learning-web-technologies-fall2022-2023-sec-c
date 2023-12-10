function SignUp() {
    let username = document.getElementById("Username").value;
    let email = document.getElementById("Email").value;
    let password = document.getElementById("Password").value;
    let conpassword = document.getElementById("ConPassword").value;



    let uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let lowercase = "abcdefghijklmnopqrstuvwxyz";
    let numbers = "0123456789";
    let specialCharacters = "!@#$%^&*()_+";
    let alphabets = uppercase + lowercase;

    if (!username || !email || !password || !conpassword) {
        alert("All fields must be filled.");
        return false;
    }
    

    if (uppercase.indexOf(username.charAt(0)) === -1) {
        document.getElementById("fname").innerHTML="First Name should start with a capital letter.";
        return false;
    }
    for (let i = 0; i < username.length; i++) {
        if (alphabets.indexOf(username[i]) === -1) {
            document.getElementById("fname").innerHTML="First Name should contain only alphabetic characters.";
            return false;
        }
    }


    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        document.getElementById("fname").innerHTML="Email should include '@' and '.' symbols.";
        return false;
    }

  
    for (let i = 0; i < password.length; i++) {
        let char = password[i];
        if (uppercase.indexOf(char) !== -1) hasUppercase = true;
        if (lowercase.indexOf(char) !== -1) hasLowercase = true;
        if (numbers.indexOf(char) !== -1) hasNumber = true;
        if (specialCharacters.indexOf(char) !== -1) hasSpecial = true;
    }
    if (!hasSpecial) {
        document.getElementById("fname").innerHTML="Password must include special character.";
        return false;
    }

    // Check Password Confirmation
    if (password !== conpassword) {
        document.getElementById("fname").innerHTML="Passwords do not match.";
        return false;
    }

    return true;

}
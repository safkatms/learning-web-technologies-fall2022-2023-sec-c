function validateGender() {
    let male = document.getElementById('Male').checked;
    let female = document.getElementById('Female').checked;
    let others = document.getElementById('Others').checked;

    if (male) {
        alert("Gender: Male");
    } else if (female) {
        alert("Gender: Female");
    } else if (others) {
        alert("Gender: Others");
    } else {
        alert("Field is empty");
    }
}

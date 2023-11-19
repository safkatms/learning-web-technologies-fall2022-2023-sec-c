function validateBlood() {
    let blood = document.getElementById('blood').value;

    if (!blood) {
        alert("You must select a blood group");
        return false;
    }

    alert("Blood Group: " + blood);
    return true;
}
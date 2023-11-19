function validateDegree() {
    let ssc = document.getElementById('SSC').checked;
    let hsc = document.getElementById('HSC').checked;
    let bsc = document.getElementById('BSc').checked;
    let alertMessage = "Degree: ";

    if (ssc) {
        alertMessage += "SSC ";
    }
    if (hsc) {
        alertMessage += "HSC ";
    }
    if (bsc) {
        alertMessage += "BSc";
    }

    if (!ssc && !hsc && !bsc) {
        alert("At least one field must be selected");
        return false; 
    } else {
        alert(alertMessage);
        return true; 
    }
}

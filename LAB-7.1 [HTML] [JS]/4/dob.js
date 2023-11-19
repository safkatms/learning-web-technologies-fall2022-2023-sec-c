function validateDOB() {
  let dob = document.getElementById("dob").value;
  let year = parseInt(dob.substring(0, 4), 10);

  if (dob === "") {
    alert("Date of Birth cannot be empty");
    return false;
  } else if (year < 1900 || year > 2016) {
    alert("Year must be between 1900 and 2016");
    return false;
  } else {
    alert("Date of Birth is valid");
    return true;
  }
}

function validatePicture() {
    let userId = document.getElementById('userId').value;
    let picture = document.getElementById('picture').value; 

    if (!userId || userId <= 0) {
        alert("User ID cannot be empty and has to be a positive number");
        return false;
    }else if (!picture) {
        alert("Please select a picture to upload");
        return false;
    }else{
        alert("Profile picture uploaded succesfully");
    return true;
    }
  }
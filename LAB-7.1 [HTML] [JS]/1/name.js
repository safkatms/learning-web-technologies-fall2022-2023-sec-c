function validateName() {
    let name = document.getElementById('name').value;

    if (name === "") {
        alert("Name must be filled out");
        return false;
    }else if (!(name[0].toLowerCase() != name[0].toUpperCase())) {
        alert("Name must start with a letter");
        return false;
    }else if (name.length<2) {
        alert("Name must contain at least two characters");
        return false;
    }else{
        alert("Name:"+name);
        return true;

    }


}
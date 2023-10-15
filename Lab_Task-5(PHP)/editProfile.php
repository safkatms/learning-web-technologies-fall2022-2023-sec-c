<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the edited values from the form
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $gender = $_POST["Gender"];
    $dob = $_POST["dob"];

    // Update the cookies with the edited values
    setcookie('Name', $name, time() + 3600); 
    setcookie('Email', $email, time() + 3600);
    setcookie('Gender', $gender, time() + 3600);
    setcookie('DOB', $dob, time() + 3600);

    // Redirect to the viewProfile.php page or any other page you want
    header("Location: viewProfile.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="x company" width="100px" height="100%">
        <section style="text-align: right; ">
            Logged in as <a href="viewProfile.php"><?php echo $_COOKIE['Name']; ?></a>|
            <a href="logout.php">Logout</a>
        </section>
    </header>
    <section style="width: 100%; height: auto;display: flex;" >
    <div style="width: 20%">
        <h4>Account</h4>
        <hr>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="changePassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>  
    </div>
    
    <div style=" width: 60%;">
            <fieldset style="display: flex;">
                <legend><h4>Edit Profile</h4></legend>
                <div style="height: 100%;width: 100%;">
                    <form action="" method="POST">
                    Name: <input type="text" name="Name" value="<?php echo $_COOKIE['Name']; ?>"><hr>
                    Email: <input type="text" name="Email" value="<?php echo $_COOKIE['Email']; ?>"><hr>
                    Gender: 
                    <input type="radio" name="Gender" value="Male" <?php if ($_COOKIE['Gender'] === 'Male') echo 'checked'; ?>>Male
                    <input type="radio" name="Gender" value="Female" <?php if ($_COOKIE['Gender'] === 'Female') echo 'checked'; ?>>Female
                    <input type="radio" name="Gender" value="Other" <?php if ($_COOKIE['Gender'] === 'Other') echo 'checked'; ?>>Other
                    <hr>
                    Date of Birth: <input type="date" name="dob" value="<?php echo $_COOKIE['DOB']; ?>"><hr>
                    <input type="submit" value="Submit">
                    </form>
                </div>
               
            </fieldset>
       
    </div>
    </section>
    <footer >
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>
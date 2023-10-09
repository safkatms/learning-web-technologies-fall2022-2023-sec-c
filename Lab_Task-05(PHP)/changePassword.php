<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    // Retrieve the stored password (replace with your secure password retrieval method)
    $storedPassword = $_COOKIE['Password']; 

    // Check if the current password matches the stored password (you should securely retrieve the hashed password)
    if ($currentPassword === $storedPassword) {
        // Check if the new password and confirm password match
        if ($newPassword === $confirmPassword) {
            // Update the stored password (replace with your secure password update method)
            setcookie('Password', $newPassword, time() + 3600); 

            echo "Password changed successfully!";
        } else {
            echo "New password and confirm password do not match.";
        }
    } else {
        echo "Current password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
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
        <form action="" method="POST"> 
            <fieldset style="display: flex;">
                <legend><h4>Change Password</h4></legend>
                <div style="height: 100%;width: 100%;">
                    
                    Current Password: <input type="password" name="currentPassword" id=""><hr> <!-- Use type="password" for secure password input -->
                    New Password: <input type="password" name="newPassword" id=""><hr> <!-- Use type="password" for secure password input -->
                    Retype New Password: <input type="password" name="confirmPassword" id=""><hr> <!-- Use type="password" for secure password input -->
        
                    <input type="submit" value="Submit">
                </div>
            </fieldset>
        </form>
    </div>
    </section>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>

<?php 
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="x company" width="100px" height="100%">
        <section style="text-align: right; ">
            Logged in as <a href="viewProfile.php"><?php echo $_COOKIE['Name']; ?></a>|
            <a href="logout.php">Logout</a>
        </section>
    </header>
    <section style="width: 100%; height: auto;display: flex;">
    <div style="height: 100%;width: 20%;">
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
    
    <div style="width: auto;">
        <h3>Welcome <?php echo $_COOKIE['Name']; ?></h3>
    </div>
    </section>

    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
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
                <legend><h4>Profile</h4></legend>
                <div style="height: 100%;width: 300px;">
                    Name: <?php echo $_COOKIE['Name']; ?><br><hr>
                    Email: <?php echo $_COOKIE['Email']; ?><br><hr>
                    Gender: <?php echo $_COOKIE['Gender']; ?><br><hr>
                    Date of Birth: <?php echo $_COOKIE['DOB']; ?><br><hr>
                    <a href="editProfile.php">Edit Profile</a>
                </div>
                <div style="height: 100%;width: 30px; margin-left: 100px;">
                    <img src="dp.png" alt="">
                    <a href="changeProfilePicture.php">Change</a>
                </div>
            </fieldset>
       
    </div>
    </section>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>

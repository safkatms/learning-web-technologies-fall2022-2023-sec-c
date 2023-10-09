<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
    <header >
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
                <legend><h4>Profile Picture</h4></legend>
                <div style="height: 100%;width: 100%;">
                    
                    <img src="dp.png" alt=""><br>
                    <input type="file" name="changeProfilePicture" id="">
                    <hr>
        
                    <input type="submit" value="Submit">
                </div>
               
            </fieldset>
       
    </div>
    </section>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>

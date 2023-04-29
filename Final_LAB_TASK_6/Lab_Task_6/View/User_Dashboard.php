<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style>
.session{
    style="color: black; 
    text-align: right;
}
        </style>
</head>

<body>
    <div class="container" style="margin-top:07%;margin-left:4%">
            <ul>
                <li><a href="User_Dashboard.php">Dashboard</a></li>
                <li><a href="User_Profile.php">View Profile</a></li>
                <li><a href="Edit_Profile.php">Edit Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <?php
session_start();
?>
<div class="session">
<h1 > Welcome
<?php
echo $_SESSION['uname'];
?>
    </div>
</body>

</html>
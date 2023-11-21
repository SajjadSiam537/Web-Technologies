<?php
 include("../controller/cont.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="headerStyle.css">
</head>
<body>
<div class="banner">
    <div class="bg-banner">
    <div class="navbar">

<img src="logo.png" class="logo">
<ul>
    <li><b><a href = "about.php"> About</a></b></li>
    <li><b><a href = "contact.php"> Contact</a></b></li>
    <li><b><a href = "gallery.php"> Gallery</a></b></li>
    <li><button class="but"><a href = "packages.php"><b> Packages</b></a></button></li>
    <li><b><a href = "login.php">Login </a></b></li>
   
</ul>
</div>
    <div class="box">
        <div>
        <h2>Contact Us</h2>
    <h5>Plan Your Trip</h5>
    <h6>Our travel experts can help you book now</h6>
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="text" id="name" name="name" placeholder="Name" size="25" >
    <br>
    <input type="text" id="phone" name="phone" placeholder="Contact No" size="25" >
   <br>
    <input type="text" id="email" name="email" placeholder="Email" size="25" >
 <br>
   <textarea name="message" placeholder="Message" rowspan="20" colspan="50"></textarea>
   <br>
   <input type="submit" value="Send Message" name="msgClick" id="mclick" class="btn">
   <input type="submit" value="Go Back" name="backClick" id="bclick" class="btn">
</div>
    

 </div>
 </form>   

   <?php
include("../view/footer.php");
?>
</body>
</html>
<?php
 include("../controller/passchange.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <style>
        body{
            background-color: #abdbe3;
        }
        .fbutton{
            background-color: black;
    color: aliceblue;
    cursor: pointer;  
        }
        </style>
        <link rel="stylesheet" href="headerStyle.css">
        <ul>
    <li><b><a href = "about.php"> About</a></b></li>
    <li><b><a href = "contact.php"> Contact</a></b></li>
    <li><b><a href = "gallery.php"> Gallery</a></b></li>
    <li><button class="but"><a href = "packages.php"><b> Packages</b></a></button></li>
    <li><b><a href = "login.php">Login </a></b></li>
   
</ul>
</head>
<body>
<br><br><br><br><br><br>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="text-align: center">
           
               
           <label style="font-size:20px;"><strong>Change Password</strong></label>
           <br><br><br><br>
           Username:  <input type="text" id="uname" name="uname">
           <?php
            echo $puname;
            ?>
           <br><br><br>    
           New Password:  <input type="password" id="npass" name="npass">
           <?php
            echo $pnpass;
            ?>
           <br><br><br><br>
           <?php                
                echo $pmessage;
                ?> 
            <br><br><br>
           <input type="submit" value="Confirm" name="conClick" class="fbutton">
           &nbsp&nbsp&nbsp&nbsp
           <input type="submit" value="Back" name="canClick" class="fbutton">
           
           

</form>
<?php
include("../view/footer.php");
?>
</body>
</html>
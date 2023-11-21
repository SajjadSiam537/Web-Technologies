<?php
include("../controller/agentvalid.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Agent</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <div>
<nav>

<ul>
    <li><a href="adminDash.php" class="active">Home</a></li>
    <li><a href="addAgent.php">Add Agent</a></li>
    <li><a href="deleteAgent.php">Delete Agent</a></li>
    <li><a href="updatepackage.php">Update Packges</a></li>
    <li><a href="adminUser.php">See User Details</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</nav>
</div>
<div class="container">
<div class="title"> Add Agent </div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
   <div class="user_details">
        <div class="input-box">
        <span class="details">First name</span>
                <input type="text" id="fname" name="fname" placeholder="Enter your First Name" >
                <?php
                echo $vfname;
                ?>
        </div>
        <div class="input-box">
        <span class="details">Last name</span>
                <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" >
                <?php
                echo $vlname;
                ?>
        </div>
        <div class="input-box">
        <span class="details">Username</span>
                <input type="text" id="uname" name="uname" placeholder="Enter your Username" >
                <?php
                echo $vuname;
                ?>
                
        </div>
        <div class="input-box">
        <span class="details">Address </span>
             <input type="text" id="address" name="address" placeholder="Enter your Address" >
             <?php
                echo $vaddress;
                ?>
        </div>
        <div class="input-box">
        <span class="details"> Email </span>

                <input type="email" id="email" name="email" placeholder="Enter your Email" >
                <?php
                echo $vemail;
                ?>
        </div>
        <div class="input-box">
        <span class="details">  Password </span>
                 <input type="password" id="pass" name="pass" placeholder="Enter a password" >
                 <?php
                echo $vpass;
                ?>
        </div>


</div> 
<?php                
                echo $message;
                ?> 
        <div class="button">
        <input type="submit" value="Submit" name="btnClick2">
        </div>
                       
</form>
</div>  
<?php
include("../view/footer.php");
?>

</body>
</html>
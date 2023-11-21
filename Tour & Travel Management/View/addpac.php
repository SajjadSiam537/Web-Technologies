<?php
include("../controller/addpacControll.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
<div class="title">Add Tour Packages </div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
   <div class="user_details">
        <div class="input-box">
        <span class="details">Place</span>
                <input type="text" id="place" name="place" placeholder="Enter Place" >
               
        </div>
        <div class="input-box">
        <span class="details">Duration</span>
                <input type="text" id="dura" name="dura" placeholder="Enter Duration" >
                
        </div>
        <div class="input-box">
        <span class="details">Start Date</span>
                <input type="text" id="sdate" name="sdate" placeholder="Enter Start Date" >
                
                
        </div>
        <div class="input-box">
        <span class="details">End Date </span>
             <input type="text" id="edate" name="edate" placeholder="Enter End Date" >
            
        </div>
        <div class="input-box">
        <span class="details"> Cost </span>

                <input type="text" id="cost" name="cost" placeholder="Enter the Cost" >
                
        </div>
        <div class="input-box">
        <span class="details"> Booking Amount </span>
                 <input type="text" id="bamount" name="bamount" placeholder="Enter Booking Amount" >
                
        </div>
        <div class="input-box">
        <span class="details"> Booking Last Date </span>
                 <input type="text" id="bdate" name="bdate" placeholder="Enter Booking Last Date" >
                 
        </div>
        <div class="input-box">
        <span class="details"> Offer Amount </span>
                 <input type="text" id="oamount" name="oamount" placeholder="Enter Offer Amount" >
                 
        </div>
        <div class="input-box">
        <span class="details"> Transport </span>
                 <input type="text" id="tra" name="tra" placeholder="Enter Transport" >
                 
        </div>

</div> 
<?php                
                echo $message;
                ?> 

        <div class="button">
        <input type="submit" value="Submit" name="btnClick2">
        <button><a href = "updatepackage.php"> Back </a></button>
        </div>             
</form>
</div>   
</body>
</html>
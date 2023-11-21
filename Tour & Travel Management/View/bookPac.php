<?php
include("../controller/getPac.php");

?>

<?php
include("../controller/bookedPac.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

nav{
    background-color: #57688F;
    height: 80px;
    width: 100%;
}

nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;

}
nav ul{
    float: right;
    margin-right: 55px;
}

nav ul li a{
    color: white;
    text-decoration: none;
    font-size: 15px;
    font-family: cursive;
    padding: 7px 13px;
}

a:hover{
    color: #f7c324;
}
    </style>
</head>
<body>
<nav>

<ul>
    <li><a href="userDash.php" class="active">Home</a></li>
    <li><a href="userProfile.php">Profile</a></li>
    <li><a href="hotels.php">Hotels</a></li>
    <li><a href="userBooked.php">Booked Packages</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</nav>

<form action="#" method="post" style="text-align: center">
<br><br>
                <label style="font-size:20px;"><strong>Package Information</strong></label>
                <br><br>
    <table border="0" align="center" width="450px" height="450px">
    <tr>
          <td>ID:</td>
          <td><?php echo $data['ID'];?></td>
        </tr>
       <tr>
          <td>Place:</td>
          <td><?php echo $data['Place'];?></td>
        </tr>
        <tr>
            <td>Duration:</td>
            <td><?php echo $data['Duration'];?></td>
          </tr>
        <tr>
        <tr>
            <td>StartDate:</td>
            <td><?php echo $data['StartDate'];?></td>
          </tr>
        <tr>
        <tr>
           <td>EndDate:</td>
           <td><?php echo $data['EndDate'];?></td>
       </tr>
            <td>Cost:</td>
            <td><?php echo $data['Cost'];?></td>
        </tr>
        </tr>
        <tr>
           <td>BookingAmount:</td>
           <td><?php echo $data['BookingAmount'];?></td>
       </tr>
       <tr>
           <td>BookingLastDate:</td>
           <td><?php echo $data['BookingLastDate'];?></td>
       </tr>
       <tr>
           <td>OfferAmount:</td>
           <td><?php echo $data['OfferAmount'];?></td>
       </tr>
       <tr>
           <td>Transport:</td>
           <td><?php echo $data['Transport'];?></td>
       </tr>
        <tr><td>
            <?php                
                echo $message;
                ?> 
                </td>
</tr>
<tr>
            <td ><input type="submit" name="submit" value="Book Now" class="btn">
            <input type="submit" name="submit2" value="Back" class="btn">
            </td>
            
        </tr>
    </td>
</tr>
</table>
</form>

</body>
</html>
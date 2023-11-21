<?php
 include("../controller/pacshow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style5.css">
    <style>
        
        .table
        {
            width:100%;
            text-align:center;
            padding:50px;
            
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
    <?php
session_start();

?>
<h1 style="color: black"> Welcome
<?php
echo $_SESSION['uname'];
?>
</h1 >
<br>
<table class="table"  width="100%">
    <tr>
        <th></th>
        <th>Place</th>
        <th>Duration</th>
        <th>StartDate</th>
        <th>EndDate</th>
        <th>Cost</th>
        <th>BookingAmount</th>
        <th>BookingLastDate</th>
        <th>OfferAmount</th>
        <th>Transport</th>
        <th></th>
</tr>
<?php

while($data=mysqli_fetch_assoc( $userQuery))
{    
    $ID= $data['ID'];
    $Place= $data['Place'];
    $Duration= $data['Duration'];
    $StartDate= $data['StartDate'];
    $EndDate= $data['EndDate'];
    $Cost= $data['Cost'];
    $BookingAmount= $data['BookingAmount'];
    $BookingLastDate= $data['BookingLastDate'];
    $OfferAmount= $data['OfferAmount'];
    $Transport= $data['Transport'];
    echo 
    "<tr>
    <td></td>
    <td>$Place</td>
    <td>$Duration</td>
    <td>$StartDate</td>
    <td>$EndDate</td>
    <td>$Cost</td>
    <td>$BookingAmount</td>
    <td>$BookingLastDate</td>
    <td>$OfferAmount</td>
    <td>$Transport</td>
    <td>
    <a href='../view/bookPac.php?id=$ID'><button>Book Now</button></a>
    </td>
    </tr>
    
    ";
    
    
}


?>
</table>
<?php
include("../view/footer.php");
?>
</body>
</html>
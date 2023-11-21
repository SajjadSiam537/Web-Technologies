<?php
 include("../controller/pacshow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Dashboard</title>
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
<div>
    <nav>

        <ul>
            <li><a href="agentDash.php" class="active">Home</a></li>
            <li><a href="agentProfile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
       
    </nav>
</div>
<?php
session_start();
?>
<div>
<h1 style="color: black; font-family: cursive "> Welcome
<?php
echo $_SESSION['uname'];
?>
</h1 >
</div>
<table class="table"  width="100%">
    <tr>
 
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

    <td>$Place</td>
    <td>$Duration</td>
    <td>$StartDate</td>
    <td> $EndDate</td>
    <td>$Cost</td>
    <td>$BookingAmount</td>
    <td>$BookingLastDate</td>
    <td>$OfferAmount</td>
    <td>$Transport</td>

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
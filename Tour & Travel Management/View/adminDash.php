<?php
 include("../controller/pacshow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style5.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,500&display=swap');
*
{
    font-family: 'Poppins', sans-serif;
}
       
        .table
        {
            width:100%;
            text-align:center;
            padding:50px;
            
        }
        .bookbut{
        width: 100%;
        height: 30px;
        border: 1px solid;
        background: white;
        border-radius: 10px;
        font-size: 14px;
        color: black;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        }
        .bookbut:hover{
    border-color: red;
    background-color: red;
    transition: .5s;

}
.session{
    style="color: black; 
    text-align: right;
}
        </style>
    
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
<?php
session_start();
?>
<div class="session">
<h1 > Welcome
<?php
echo $_SESSION['uname'];
?>
</h1 >
</div>
<table class="table"  width="100%">
    <tr>
        <th>ID</th>
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
    <td>$ID</td>
    <td>$Place</td>
    <td>$Duration</td>
    <td>$StartDate</td>
    <td> $EndDate</td>
    <td>$Cost</td>
    <td>$BookingAmount</td>
    <td>$BookingLastDate</td>
    <td>$OfferAmount</td>
    <td>$Transport</td>
    <td>
    <a href='../controller/pacDelete.php?id=$ID'><button>Delete</button></a>
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
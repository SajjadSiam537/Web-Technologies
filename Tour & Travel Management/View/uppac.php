<?php
include("../controller/getPac.php");

?>
<?php
include("../controller/updatePac.php");

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


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="text-align: center">
<br><br>
                <label style="font-size:20px;"><strong>Package Information</strong></label>
                <br><br>
    <table border="0" align="center" width="450px" height="450px">
    <tr>
          <td>ID:</td>
          <td><input type="text" name="place" value="<?php echo $data['ID'];?> "></td>
        </tr>
       <tr>
          <td>Place:</td>
          <td><input type="text" name="place" value="<?php echo $data['Place'];?> "></td>
        </tr>
        <tr>
            <td>Duration:</td>
            <td><input type="text" name="dura" value="<?php echo $data['Duration'];?>"></td>
          </tr>
        <tr>
        <tr>
            <td>StartDate:</td>
            <td><input type="text" name="sdate" value="<?php echo $data['StartDate'];?>"></td>
          </tr>
        <tr>
        <tr>
           <td>EndDate:</td>
           <td><input type="text" name="edate" value="<?php echo $data['EndDate'];?>"></td>
       </tr>
            <td>Cost:</td>
            <td><input type="text" name="cost" value="<?php echo $data['Cost'];?>"></td>
        </tr>
        </tr>
        <tr>
           <td>BookingAmount:</td>
           <td><input type="text" name="bamount" value="<?php echo $data['BookingAmount'];?>"></td>
       </tr>
       <tr>
           <td>BookingLastDate:</td>
           <td><input type="text" name="bdate" value="<?php echo $data['BookingLastDate'];?>"></td>
       </tr>
       <tr>
           <td>OfferAmount:</td>
           <td><input type="text" name="oamount" value="<?php echo $data['OfferAmount'];?>"></td>
       </tr>
       <tr>
           <td>Transport:</td>
           <td><input type="text" name="tra" value="<?php echo $data['Transport'];?>"></td>
       </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Save" class="btn">
            </td>
            
        </tr>
    </td>
</tr>
</table>
</form>

</body>
</html>
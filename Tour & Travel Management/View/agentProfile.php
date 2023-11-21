<?php
include("../controller/AgProcon.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Profile</title>
    <link rel="stylesheet" href="style5.css">
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
include("../controller/agentProfileupdate.php");

?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="text-align: center">
<br><br>
                <label style="font-size:20px;"><strong>Profile Information</strong></label>
                <br><br>
    <table border="0" align="center" width="450px" height="450px">
       <tr>
          <td>First Name:</td>
          <td><input type="text" name="fname" value="<?php echo $data['FirstName'];?> "></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname" value="<?php echo $data['LastName'];?>"></td>
          </tr>
    
        <tr>
            <td>Username:</td>
            <td><input type="text" name="uname" value="<?php echo $data['Username'];?>"></td>
          </tr>
        
        <tr>
           <td>Address:</td>
           <td><input type="text" name="address" value="<?php echo $data['Address'];?>"></td>
       </tr>
       <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="<?php echo $data['Email'];?>"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="pass" value="<?php echo $data['Password'];?>"></td>
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
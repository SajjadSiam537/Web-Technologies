<?php
 include("../controller/agentshow.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Agent</title>
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
            <li><a href="adminDash.php" class="active">Home</a></li>
            <li><a href="addAgent.php">Add Agent</a></li>
            <li><a href="deleteAgent.php">Delete Agent</a></li>
            <li><a href="updatepackage.php">Update Packges</a></li>
            <li><a href="adminUser.php">See User Details</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
       
    </nav>
</div>
<table class="table"  width="100%">
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
</tr>
<?php

while($data=mysqli_fetch_assoc( $userQuery))
{    
    $ID= $data['ID'];
    $FirstName= $data['FirstName'];
    $LastName= $data['LastName'];
    $Username= $data['Username'];
    $Address= $data['Address'];
    $Email= $data['Email'];
    echo 
    "<tr>
    <td>$ID</td>
    <td>$FirstName</td>
    <td>$LastName</td>
    <td>$Username</td>
    <td> $Address</td>
    <td>$Email</td>
    <td>
    <a href='../controller/delete.php?id=$ID'><button>Delete</button></a>
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
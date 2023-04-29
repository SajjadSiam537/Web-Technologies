<?php
include ("../Controller/Find.php");
?>
<?php
include ("Navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <h1>Search For Products</h1>
        <input type="text" name="pro">
        <input type="submit" name="findproperty" value="Search">
    </form>
    <table  class="table" width="100%">
    <tr>
        <th>Name</th>
        <th>Buying Price</th>
        <th>Selling Price</th>
</tr>
<?php
while($data= mysqli_fetch_assoc($userQuery))
{    
    $Id= $data['Id'];
    $Name= $data['Name'];
    $Buying_Price= $data['Buying_Price'];
    $Selling_Price= $data['Selling_Price'];
    echo 
    "<tr>
    <td>$Name</td>
    <td>$Buying_Price</td>
    <td>$Selling_Price</td>
    </tr>
    
    ";
    
    
}


?>
</table>

</body>
</html>
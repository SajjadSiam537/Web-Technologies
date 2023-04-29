<?php
include ("../Controller/get.php");
?>

<?php
include ("../Controller/Update_Data.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="text-align: center">
<br><br>
                <label style="font-size:20px;"><strong>Product Information</strong></label>
                <br><br>
    <table border="0" align="center" width="450px" height="450px">
    <tr>
          <td>Id:</td>
          <td><input type="text" name="id" value="<?php echo $data['Id'];?> "></td>
        </tr>
       <tr>
          <td>Name:</td>
          <td><input type="text" name="name" value="<?php echo $data['Name'];?> "></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
            <td><input type="text" name="bprice" value="<?php echo $data['Buying_Price'];?>"></td>
          </tr>
        <tr>
            <td>Selling Price:</td>
            <td><input type="text" name="sprice" value="<?php echo $data['Selling_Price'];?>"></td>
          </tr>
        <tr>
            <td colspan="2"><a href="edit_propertydata.php"><input type="submit" name="submit" value="Save" class="btn"></a><br><a href="edit_propertydata.php">Go Back</a>
            </td>
            
        </tr>
        

</table>
</form>
</body>
</html>
<?php
include ("../Controller/AddData.php");
?>
<?php
include ("Navbar.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
</head>

<body>

    <div class="add_Product">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <fieldset>
                <legend class="legend"> Add Product</legend>
                <label> Property Type </label> <br>
                <input type="text" id="product_type" name="name" class="name" placeholder="Enter product type" value="">
                <br><br>
                <label> Buying Price </label><br>
                <input type="text" id="buying_price" name="bprice" class="name" placeholder="Enter product buying price" value="">
                <br><br>
                <label> Seling Price </label><br>
                <input type="text" id="selling_price" name="sprice" class="name" placeholder="Enter product selling price" value="">
                <br><br>
                <input type="checkbox" name="display"> <label> Display </label> <br><br>
                <input type="submit" name="addData" class="button" value="Submit">
            </fieldset>
        </form>
    </div>

</body>

</html>
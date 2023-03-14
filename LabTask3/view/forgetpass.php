<?php
include("../controller/forgetpassValid.php");
?>

<html>
<head>

<title>Change Password</title>

</head>
<body>
<fieldset>
<legend><h2>Change Password</h2></legend>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">        
    
        Current Password : <input type="password" name="cpass" >
        <?php
                echo $message1;
                ?>  
                <?php
                echo $message2;
                ?>                             
        <br>  <br>      
                
        New Password : <input type="password"  name="npass" >
  
        <br>  <br>
        Retype New Password : <input type="password"  name="rnpass" >
 
                <?php
                echo $message3;
                ?>   
        <hr>                 
            <input type="submit" value="Submit" name="btn" >
            


</form>
</fieldset>

</body>
</html>
<?php
include("../controller/loginValidation.php");
?>

<html>
<head>

<title>Login</title>

</head>
<body>
<fieldset>
<legend><h2>Login</h2></legend>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">        
    
        Username : <input type="text" name="uname" >
        <?php
                echo $vuname;
                ?>
                    
                    
        <br>  <br>      
                
        Password : <input type="password"  name="pass" >
        <?php
                echo $vpass;
                ?>
        <hr>
                        
                <label>
                <input type="checkbox" name="remember" >Remember me
                </label>
                <br><br> 
                            
                <input type="submit" value="Login" name="btnClick" >
            
                
                <a href="forgetpass.php">Forgot Password?</a>
            


</form>
</fieldset>

</body>
</html>
<?php
 include("../Controller/Validation.php");
 if(isset($_COOKIE['ucookie']) && isset($_COOKIE['pcookie'])){
    $u=$_COOKIE['ucookie'];
    $p=$_COOKIE['pcookie'];
 }
 else{
    $u="";
    $p="";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>

<body>
<div class="center">
    <h1>Login</h1>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>"  onsubmit="return validate()"  method="post" >
           
               
                
                <div class="txt_field">
                 <input type="text" id="uname"  name="uname" value="<?php echo $u ?>">
                 <span></span>
                 <label> Username </label>
                </div>
           <div class="txt_field">      
                <input type="password" id="pass" name="pass" value="<?php echo $p ?>">
                <span></span>
                <label> Password </label>
              </div> 
              <div class="re">          
                <label>
                <input type="checkbox" name="remember" id="remember">Remember me
                </label> 
               </div>              
                <input type="submit" value="Login" name="btnClick" id="click">
               <div class="msg"> 
                <?php                
                echo $lmessage;
                ?>
                </div> 
                <div class="pass">
                <a href="Forgot_Password.php">Forgot Password?</a>
               </div>
                

                
                <div class="signup_link">
                <label>Not yet a member?</label>   
                <a href="Registration.php">Register Here</a>
                <br>
                <br>
                <a href="Home_Page.html">Go Home</a>
</div>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	function validate()
	{
		var username=document.getElementById('uname');
		var password=document.getElementById('pass');
		if(username.value=="" || password.value=="")
		{
			//alert("Username or password is empty");
         swal("Username or password is empty");
			return false;
		}
		else
			return true;
	}
</script>
</body>
</html>
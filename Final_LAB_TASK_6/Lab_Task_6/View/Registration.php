<?php
include("../Controller/Adding_data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
<div class="title"> User Registration </div>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validate()" method="post" >
   <div class="user_details">
        <div class="input-box">
        <span class="details">First name</span>
                <input type="text" id="fname" name="fname" placeholder="Enter your First Name" >
                <?php
                echo $vfname;
                ?>
        </div>
        <div class="input-box">
        <span class="details">Last name</span>
                <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" >
                <?php
                echo $vlname;
                ?>
        </div>
        <div class="input-box">
        <span class="details">Username</span>
                <input type="text" id="uname" name="uname" placeholder="Enter your Username" >
                <?php
                echo $vuname;
                ?>
                
        </div>
        <div class="input-box">
        <span class="details">Address </span>
             <input type="text" id="address" name="address" placeholder="Enter your Address" >
             <?php
                echo $vaddress;
                ?>
        </div>
        <div class="input-box">
        <span class="details"> Email </span>

                <input type="email" id="email" name="email" placeholder="Enter your Email" >
                <?php
                echo $vemail;
                ?>
        </div>
        <div class="input-box">
        <span class="details">  Password </span>
                 <input type="password" id="pass" name="pass" placeholder="Enter a password" >
                 <?php
                echo $vpass;
                ?>
        </div>

        

</div> 
<?php                
                echo $message;
                ?> 
        <div class="button">
        <input type="submit" value="Sign Up" name="btnClick2">
        </div>
                <a href = "login.php"> Go Back </a>              
</form>
</div> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	function validate()
	{
                var mas="";
		var firstname=document.getElementById('fname');
                var lastname=document.getElementById('lname');
                var username=document.getElementById('uname');
                var address=document.getElementById('address');
                var email=document.getElementById('email');
		var password=document.getElementById('pass');
                if(firstname.value=="" || lastname.value=="" || username.value=="" || address.value=="" || email.value=="" || password.value=="")
		{
			//alert("Username or password is empty");
         swal("Please fillup all the box.");
			return false;
		}
		else
                {
                if(password.value.length<8)
                {
                        swal("Password must be not less than 8 character "); 
                        return false;   
                }
                else{

                        return true;
                }
               
                }
			

                        
	}
</script>  
</body>
</html>
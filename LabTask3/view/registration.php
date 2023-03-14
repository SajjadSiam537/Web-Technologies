<?php
include("../controller/registrationValidation.php");
?>
<html>

    <head>
        <title></title>
    </head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    
        <fieldset>
        <legend><h2>Registration</h2></legend>
        <br>
            
            Name:
                    
                        <input type="text" name="name" >
                        <?php
                echo $vname;
                ?>
                <hr>
                
                
                Email:

                        <input type="email" name="email">
                        <?php
                echo $vemail;
                ?>
                        <hr>
                        User Name: 
                    
                        <input type="text" name="uname" >
                        <?php
                echo $vuname;
                ?>
                <hr>

                Password : <input type="password"  name="pass" >
        <?php
                echo $vpass;
                ?>
        <hr>

        Confirm Password : <input type="password"  name="cpass" >
        <?php
                echo $vcpass;
                ?>
        <hr>
                <fieldset>
<legend>Gender:</legend>
            
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other
                    <?php
                echo $vgender;
                ?>
                </fieldset>

                    <hr>
<fieldset>
                    <legend>Date of Birth:</legend>
            
                    <input type="date" name="date">
                    <?php
                echo $vdate;
                ?>
                </fieldset>
                    <hr>

                    <input type="submit" name="click" value="Submit">
                    <?php
                echo $message;
                ?>
        </fieldset>    
    </form>
</body>
</html>
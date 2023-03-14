<?php
include("../controller/formValidation.php");
?>
<html>

    <head>
        <title></title>
    </head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    
        <fieldset>
        <legend><b>Designing HTML form using PHP with validation of user inputs</b></legend>
        <br>
            
            <legend>Name: </legend>
                    
                        <input type="text" name="name" >
                        <?php
                echo $vname;
                ?>
                <hr>
                
                
                <legend>Email:</legend>

                        <input type="email" name="email">
                        <?php
                echo $vemail;
                ?>
                        <hr>

<legend>Date of Birth:</legend>
            
                    <input type="date" name="date">
                    <?php
                echo $vdate;
                ?>
                    <hr>

<legend>Gender:</legend>
            
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other
                    <?php
                echo $vgender;
                ?>
                    <hr>

<legend>Degree:</legend>
            
                    <input type="checkbox" name="degree[1]">SSC
                    <input type="checkbox" name="degree[2]">HSC
                    <input type="checkbox" name="degree[3]">BSc
                    <input type="checkbox" name="degree[4]">MSc
                    <?php
                echo $vdegree;
                ?>
                    <hr>

<legend>Blood Group:</legend>
            
                    <select name="option">
                        <option></option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                    </select>
                    <?php
                echo $voption;
                ?>
                    <hr>

                    <input type="submit" name="click" value="Submit">

        </fieldset>    
    </form>
</body>
</html>
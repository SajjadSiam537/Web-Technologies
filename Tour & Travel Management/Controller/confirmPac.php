
<?php

$message='';

if (isset($_POST['submit'])) 
{
    
	
                $message= "<span style='color:green;'>Successfully Booked The Package</span>";
		    
            }  
            if (isset($_POST['submit2'])) 
            {
                
                
                header("location:userDash.php");
                        
                        }  
?>
<?php
$message1='';
$message2='';
$message3='';


if (isset($_POST['btn'])) 
{
    $cpass = $_POST['cpass'];
    $npass = $_POST['npass'];
    $rnpass = $_POST['rnpass'];
    

        if (empty($cpass)) {
            $message1 = "<span style='color:red;'>Required</span>";
        }

        else if($cpass != 12345){
            $message2 = "<span style='color:red;'> Current Password doesn't match</span>";
        }
    
        else
        {
            $cpass = 12345;
        }

        if($npass != $rnpass){

            $message3 = "<span style='color:red;'> Retype a valid password </span>";
        }
        
        
    }


?>
<?php
$uname='';
$vuname='';
$pass='';
$vpass='';


if (isset($_POST['btnClick'])) 
{
    

        if (empty($_POST['uname'])) {
        $vuname= "<span style='color:red;'>Required</span>";
        }

        else if(!preg_match("/^[a-zA-Z][a-zA-Z0-9_\.\-]{2,}$/", $_POST['uname'])){
            $vuname= "<span style='color:red;'> User Name can contain alpha numeric characters, period, dash or 
            underscore only</span>";
        }
    
        else
        {
            $uname= $_POST['uname'];
        }

        if(empty($_POST['pass'])){
            $vpass= "<span style='color:red;'>Required</span>";
        }
        else if(!preg_match("/^[a-zA-Z0-9@#$%]{8,20}$/", $_POST['pass'])){
            $vpass = "<span style='color:red;'> Password must contain at least one of the special characters (@, #, $, %) </span>";
        }
        else
        {
            $pass=$_POST['pass'];
        }
        
    }

?>
<?php
$name='';
$vname='';
$email='';
$vemail='';
$uname='';
$vuname='';
$pass='';
$vpass='';
$cpass='';
$vcpass='';
$gender='';
$vgender='';
$date='';
$vdate='';
$message='';

if (isset($_POST['click'])) 
{
    
        if (empty($_POST['name'])) {
        $vname= "<span style='color:red;'>Required</span>";
        }

        else if(!preg_match("/^[a-zA-Z][a-zA-Z\.\-]{2,}$/", $_POST['name'])){
            $vname= "<span style='color:red;'> Name contain a-z, A-Z, 
            period, dash only</span>";
        }
    
        else
        {
            $name= $_POST['name'];
        }

        if(empty($_POST['email'])){
            $vemail= "<span style='color:red;'>Required</span>";
        }
        else if(!preg_match("/^([a-z]+[0-9]*)@([a-z]+)\.[a-z]{2,5}$/", $_POST['email'])){
            $vemail = "<span style='color:red;'> anything@example.
            com </span>";
        }
        else
        {
            $email=$_POST['email'];
        }

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

            if(empty($_POST['cpass'])){
                $vcpass= "<span style='color:red;'>Required</span>";
            }
            else
            {
                $cpass=$_POST['cpass'];
            }
    
        
        if(empty($_POST['gender'])){
            $vgender= "<span style='color:red;'>Select an option</span>";
        }
        else
        {
            $gender=$_POST['gender'];
        }

        if(empty($_POST['date'])){
            $vdate= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $date=$_POST['date'];
        }
        if(!empty($name && $email && $uname && $pass && $cpass && $gender && $date )){
			$formdata = array(
				'Name'=>$_POST["name"],
                'Email'=>$_POST["email"],
                'Username'=>$_POST["uname"],
                'Password'=> $_POST["pass"],
                'Confirm Password'=>$_POST["cpass"],
                'Gender'=>$_POST["gender"],
                'Date'=>$_POST["date"],	
			 );
			 $existingdata = file_get_contents('../model/registration.json');
			 $tempJSONdata = json_decode($existingdata);
			 $tempJSONdata[] =$formdata;
			 
			 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
			 
			 
			 if(file_put_contents("../model/registration.json", $jsondata)) {
				  
			  }
			 else 
				  echo "no data saved";
		
		   $data = file_get_contents("../model/registration.json");
		$message= "<span style='color:green;'>Successfully Saved Information!</span>";
		}
    

        }

?>
<?php
 include("../model/database.php");
?>
<?php
$fname='';
$vfname='';
$lname='';
$vlname='';
$uname='';
$vuname='';
$address='';
$vaddress='';
$email='';
$vemail='';
$pass='';
$vpass='';
$message='';
$role='';
$vrole='';
if (isset($_POST['btnClick2'])) 
{
    
	if (empty($_POST['fname'])) {
        $vfname= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $fname=$_POST['fname'];
        }
    
    if(empty($_POST['lname'])){
			$vlname= "<span style='color:red;'>Required</span>";	
		}
        else
        {
            $lname=$_POST['lname'];
        }
        
    

    if(empty($_POST['uname'])){
            $vuname= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $uname=$_POST['uname'];
        }
    

        if(empty($_POST['address'])){
            $vaddress= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $address=$_POST['address'];
        }
    

        if(empty($_POST['email'])){
            $vemail= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $email=$_POST['email'];
        }
    

        if(empty($_POST['pass'])){
            $vpass= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $pass=$_POST['pass'];
        }

        // if(!isset($_POST['role'])){
        //     $vrole= "<span style='color:red;'>Required</span>";
        // }
        // else
        // {
        //     $role=$_POST['role'];
        // }

    if(!empty($fname && $lname && $uname && $address && $email && $pass ))  
         {

                $addAgent = new db();
                $conn=$addAgent->OpenConn();   
                $userQuery=$addAgent->addAgent($conn,$fname,$lname,$uname,$address,$email,$pass);

                $message= "<span style='color:green;'>Successfully Add Information!</span>";
		    
            }  
	}
 
?>
<?php
 include("../Model/database.php");
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

if (isset($_POST['btnClick2'])) 
{
    $fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
    
	// if (empty($_POST['fname'])) {
    //     $vfname= "<span style='color:red;'>Required</span>";
	// 	}
    //     else
    //     {
    //         $fname=$_POST['fname'];
    //     }
    
    // if(empty($_POST['lname'])){
	// 		$vlname= "<span style='color:red;'>Required</span>";	
	// 	}
    //     else
    //     {
    //         $lname=$_POST['lname'];
    //     }
        
    

    // if(empty($_POST['uname'])){
    //         $vuname= "<span style='color:red;'>Required</span>";
    //     }
    //     else
    //     {
    //         $uname=$_POST['uname'];
    //     }
    

    //     if(empty($_POST['address'])){
    //         $vaddress= "<span style='color:red;'>Required</span>";
    //     }
    //     else
    //     {
    //         $address=$_POST['address'];
    //     }
    

    //     if(empty($_POST['email'])){
    //         $vemail= "<span style='color:red;'>Required</span>";
    //     }
    //     else
    //     {
    //         $email=$_POST['email'];
    //     }
    

    //     if(empty($_POST['pass'])){
    //         $vpass= "<span style='color:red;'>Required</span>";
    //     }
    //     else
    //     {
    //         $pass=$_POST['pass'];
    //     }

        // if(!isset($_POST['role'])){
        //     $vrole= "<span style='color:red;'>Required</span>";
        // }
        // else
        // {
        //     $role=$_POST['role'];
        // }

    

                $reg_In = new db();
                $conn=$reg_In->OpenConn();   
                $userQuery=$reg_In->registration($conn,$fname,$lname,$uname,$address,$email,$pass);

                $message= "<span style='color:green;'>Successfully Saved Information!</span>";
		
	}
 
?>
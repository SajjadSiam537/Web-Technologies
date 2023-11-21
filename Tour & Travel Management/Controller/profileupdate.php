<?php
 $fname='';
 $lname='';
 $uname='';
 $address='';
 $email='';
 $pass='';

	if(isset($_POST['submit']))
    {

        session_start();
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];        
        $uname=$_POST['uname'];
        $address=$_POST['address'];
        $email=$_POST["email" ];
        $pass=$_POST['pass'];
        
            
                          
            $profileupdate = new db();
            $conns=$profileupdate->OpenConn();   
            $userQuerys=$profileupdate->profileupdate($conn,$fname,$lname,$uname,$address,$email,$pass,$_SESSION['uname']);      
                                         
            header("location:userProfile.php");       
                   
       
	}
?>
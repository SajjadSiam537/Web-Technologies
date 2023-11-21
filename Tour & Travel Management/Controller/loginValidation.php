<?php
 include("../model/database.php");
?>

<?php

$lmessage="";
session_start();

if(isset($_POST["btnClick"]))
{

	$adminlogin = new db();
    $conn=$adminlogin->OpenConn();   
    $userQuery=$adminlogin->adminLogin($conn,$_POST['uname'],$_POST['pass']);
	if($userQuery==1)
	{
		$_SESSION["uname"] = $_POST['uname'];
		if(isset($_POST[remember])){
			setcookie('ucookie',$_POST['uname'],time()+(60*60*24));
			setcookie('pcookie',$_POST['pass'],time()+(60*60*24));
		}
		else{
			setcookie('ucookie','',time()-(60*60*24));
			setcookie('pcookie','',time()-(60*60*24));
		}
		header("location:adminDash.php");
	} 
	$agentlogin = new db();
    $conn=$agentlogin->OpenConn();   
    $userQuery=$agentlogin->agentLogin($conn,$_POST['uname'],$_POST['pass']);
	if($userQuery==1)
	{
		$_SESSION["uname"] = $_POST['uname'];
		if(isset($_POST[remember])){
			setcookie('ucookie',$_POST['uname'],time()+(60*60*24));
			setcookie('pcookie',$_POST['pass'],time()+(60*60*24));
		}
		else{
			setcookie('ucookie','',time()-(60*60*24));
			setcookie('pcookie','',time()-(60*60*24));
		}
		header("location:agentDash.php");
	} 
	$login = new db();
    $conn=$login->OpenConn();   
    $userQuery=$login->Login($conn,$_POST['uname'],$_POST['pass']);
    if($userQuery==1)
	{
		$_SESSION["uname"] = $_POST['uname'];
		if(isset($_POST[remember])){
			setcookie('ucookie',$_POST['uname'],time()+(60*60*24));
			setcookie('pcookie',$_POST['pass'],time()+(60*60*24));
		}
		else{
			setcookie('ucookie','',time()-(60*60*24));
			setcookie('pcookie','',time()-(60*60*24));
		}
		header("location:userDash.php");
	} 
	
	else
	{
		$lmessage= "<span style='color:red;'>Invalid Username or Password!</span>";
	     
	}

		

}
		
		

	

		
?>
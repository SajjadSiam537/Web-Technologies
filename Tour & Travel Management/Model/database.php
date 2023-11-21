<?php

class db
{
    
    function OpenConn()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="pro";
        $conn = new mysqli($servername, $username, $password,$dbname);

        return $conn;
    }

    function registration($conn,$fname,$lname,$uname,$address,$email,$pass)
 {

$result = $conn->query("INSERT INTO `registration` (`FirstName`, `LastName`, `Username`, `Address`, `Email`, `Password`) VALUES ('$fname', '$lname', '$uname','$address', '$email', '$pass')");
 }

 function addAgent($conn,$fname,$lname,$uname,$address,$email,$pass)
 {

$result = $conn->query("INSERT INTO `agent` (`FirstName`, `LastName`, `Username`, `Address`, `Email`, `Password`) VALUES ('$fname', '$lname', '$uname','$address', '$email', '$pass')");
 }

 function Login($conn,$uname,$pass)
 {
$result = $conn->query("SELECT *FROM `registration` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }
 function adminLogin($conn,$uname,$pass)
 {
$result = $conn->query("SELECT * FROM `adminlogin` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }
 function agentLogin($conn,$uname,$pass)
 {
$result = $conn->query("SELECT * FROM `agent` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }

 function passupdate($conn,$uname,$npass)
 {
$result = $conn->query("UPDATE  `registration` SET Password ='$npass' WHERE Username='$uname'");
 }

 function agentDelete($conn, $id)
 { 
$result = $conn->query("DELETE FROM `agent` WHERE ID ='$id'");
 
 }
 function agentshow($conn)
 {
$result = $conn->query("SELECT * FROM `agent`");

return $result;

 }

 function pacshow($conn)
 {
$result = $conn->query("SELECT * FROM `package`");

return $result;

 }

 function bookedpacshow($conn)
 {
$result = $conn->query("SELECT * FROM `bookedpackage`");

return $result;

 }

 function pacUpdate($conn,$id,$place,$dura,$sdate,$edate,$cost,$bamount,$bdate,$oamount,$tra)
 {
$result = $conn->query("UPDATE `package` SET Place='$place', Duration='$dura', StartDate='$sdate' , EndDate='$edate', Cost='$cost', BookingAmount='$bamount', BookingLastDate='$bdate', OfferAmount='$oamount', Transport='$tra' WHERE ID='$id'");
 }

 function usershow($conn)
 {
$result = $conn->query("SELECT * FROM `registration`");

return $result;

 }

 function pacDelete($conn, $id)
 { 
$result = $conn->query("DELETE FROM `package` WHERE ID ='$id'");
 
 }
 function get($conn, $id)
 { 
$result = $conn->query("SELECT ID, Place, Duration, StartDate, EndDate, Cost, BookingAmount, BookingLastDate, OfferAmount, Transport FROM `package` WHERE ID ='$id'");
 return $result;
 }
 function addpac($conn,$place,$dura,$sdate,$edate,$cost,$bamount,$bdate,$oamount,$tra)
 {

$result = $conn->query("INSERT INTO `package` (`Place`, `Duration`, `StartDate`, `EndDate`, `Cost`, `BookingAmount`, `BookingLastDate`, `OfferAmount`, `Transport`) VALUES ('$place', '$dura', '$sdate','$edate', '$cost', '$bamount', '$bdate','$oamount','$tra')");
 }

 function Profile($conn,$uname)
 {
$result = $conn->query("SELECT FirstName, LastName, Username, Address, Email, Password FROM  `registration` WHERE Username='$uname'");

return $result;

 }

 function AgentProfile($conn,$uname)
 {
$result = $conn->query("SELECT FirstName, LastName, Username, Address, Email, Password FROM  `agent` WHERE Username='$uname'");

return $result;

 }
 function profileupdate($conn,$fname,$lname,$uname,$address,$email,$pass,$user)
 {
$result = $conn->query("UPDATE  `registration`SET FirstName='$fname', LastName='$lname', Username='$uname' , Address='$address', Email='$email', Password='$pass' WHERE Username='$user'");
 }

 function Agentprofileupdate($conn,$fname,$lname,$uname,$address,$email,$pass,$user)
 {
$result = $conn->query("UPDATE `agent`SET FirstName='$fname', LastName='$lname', Username='$uname' , Address='$address', Email='$email', Password='$pass' WHERE Username='$user'");
 }
 function bookpac($conn,$place,$dura,$sdate,$edate,$cost,$bamount,$bdate,$oamount,$tra)
 {

$result = $conn->query("INSERT INTO `bookedpackage` (`Place`, `Duration`, `StartDate`, `EndDate`, `Cost`, `BookingAmount`, `BookingLastDate`, `OfferAmount`, `Transport`) VALUES ('$place', '$dura', '$sdate','$edate', '$cost', '$bamount', '$bdate','$oamount','$tra')");
 }

 function CloseConn($conn)
 {
 $conn -> close();
 }

}
?>
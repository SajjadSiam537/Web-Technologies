<?php

class db
{
    
    function OpenConn()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="product_db";
        $conn = new mysqli($servername, $username, $password,$dbname);

        return $conn;
    }

    function registration($conn,$fname,$lname,$uname,$address,$email,$pass)
 {

$result = $conn->query("INSERT INTO `registration` (`FirstName`, `LastName`, `Username`, `Address`, `Email`, `Password`) VALUES ('$fname', '$lname', '$uname','$address', '$email', '$pass')");
 }

 function Login($conn,$uname,$pass)
 {
$result = $conn->query("SELECT * FROM `registration` WHERE  Username='$uname' AND Password='$pass'");
$num=mysqli_num_rows($result);
return $num;

 }

 function CloseConn($conn)
 {
 $conn -> close();
 }

}
?>
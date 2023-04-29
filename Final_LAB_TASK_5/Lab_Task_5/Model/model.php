<?php

class db2
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

    function products($conn,$name,$bprice,$sprice)
 {

$result = $conn->query("INSERT INTO `product` (`Name`, `Buying_Price`, `Selling_Price`) VALUES ('$name', '$bprice', '$sprice')");
 }

 function productshow($conn)
 {
$result = $conn->query("SELECT * FROM `product`");

return $result;

 }

 function search($conn,$pro)
 {
$result = $conn->query("SELECT * FROM `product` WHERE Name ='$pro'");

return $result;

 }
 function Delete($conn,$id)
 { 
$result = $conn->query("DELETE FROM `product` WHERE Id='$id'");
 
 }

 function proUpdate($conn,$id,$name,$bprice ,$sprice)
 {
$result = $conn->query("UPDATE `product` SET Name='$name', Buying_Price='$bprice', Selling_Price='$sprice'  WHERE Id='$id'");
 }


 function get($conn, $id)
 { 
$result = $conn->query("SELECT * FROM `product` WHERE Id ='$id'");
 return $result;
 }


 function CloseConn($conn)
 {
 $conn -> close();
 }

}
?>
<?php
include("../model/database.php");
?>
<?php
$getid="";
$getid=$_GET['id'];
if($getid!="")
{
    $pacshow = new db();
    $conn=$pacshow->OpenConn();  
    $p=$pacshow->get($conn,$getid);
    $data=mysqli_fetch_assoc($p);
}
   
    ?>


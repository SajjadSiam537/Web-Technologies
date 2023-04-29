<?php
include("../Model/model.php");
?>
<?php
$getid="";
$getid=$_GET['id'];
if($getid!="")
{
    $pacshow = new db2();
    $conn=$pacshow->OpenConn();  
    $p=$pacshow->get($conn,$getid);
    $data=mysqli_fetch_assoc($p);


}
   
    ?>


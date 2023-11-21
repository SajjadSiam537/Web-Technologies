<?php
include("../model/database.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{
    $pacshow = new db();
    $conn=$pacshow->OpenConn();  
$Query=$pacshow->pacDelete($conn,$delete);
header("location:../view/adminDash.php?id="); 
}

?>
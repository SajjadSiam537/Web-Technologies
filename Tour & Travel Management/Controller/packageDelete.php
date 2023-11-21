<?php
 include("../model/database.php");
 include("../model/db2.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{

$Query=$noticeshow->Delete($conn,$delete);
header("location:../view/adminDash.php?id="); 
}

?>
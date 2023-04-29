<?php
include("../Model/model.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{
    $agentshow = new db2();
    $conn=$agentshow->OpenConn();  
$Query=$agentshow->Delete($conn,$delete);
header("location:../View/edit_propertydata.php?id="); 
}

?>
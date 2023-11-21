<?php
include("../model/database.php");
?>
<?php
$delete="";
$delete=$_GET['id'];
if($delete)
{
    $agentshow = new db();
    $conn=$agentshow->OpenConn();  
$Query=$agentshow->agentDelete($conn,$delete);
header("location:../view/deleteAgent.php?id="); 
}

?>
<?php
include("../Model/model.php");
?>
<?php
$pro='';

if (isset($_POST['findproperty'])) {

$pro=$_POST['pro'];

if(!empty( $pro )){ 

$seepro = new db2();
$conn= $seepro->OpenConn();   
$userQuery= $seepro->search($conn,$pro);
$data= mysqli_fetch_assoc( $userQuery);


}

}  

?>

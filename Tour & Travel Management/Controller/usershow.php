<?php
include("../model/database.php");
?>
<?php
            
            $usershow = new db();
            $conn=$usershow->OpenConn();   
            $userQuery=$usershow->usershow($conn);
            $data=mysqli_fetch_assoc( $userQuery);
                 
?>

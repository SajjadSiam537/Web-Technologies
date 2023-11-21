<?php
include("../model/database.php");
?>
<?php
            
            $pacshow = new db();
            $conn=$pacshow->OpenConn();   
            $userQuery=$pacshow->pacshow($conn);
            
            
                 
?>

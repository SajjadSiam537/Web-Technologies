<?php
include("../model/database.php");
?>
<?php
            
            $bookedpacshow = new db();
            $conn=$bookedpacshow->OpenConn();   
            $userQuery=$bookedpacshow->bookedpacshow($conn);
            
            
                 
?>

<?php
include("../model/database.php");
?>
<?php
            
            $agentshow = new db();
            $conn=$agentshow->OpenConn();   
            $userQuery=$agentshow->agentshow($conn);
           
                  
?>

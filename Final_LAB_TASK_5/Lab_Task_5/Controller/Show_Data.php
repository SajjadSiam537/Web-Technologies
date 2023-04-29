<?php
include("../Model/model.php");
?>
<?php
            
            $productshow = new db2();
            $conn=$productshow->OpenConn();   
            $userQuery=$productshow->productshow($conn);
            $data=mysqli_fetch_assoc( $userQuery);
                  

?>

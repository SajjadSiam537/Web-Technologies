
<?php
$id='';
$vid='';
$name='';
$vname='';
$bprice='';
$vbprice='';
$sprice='';
$vsprice='';
$message='';

if (isset($_POST['submit'])) 
{
    
	if (empty($_POST['id'])) {
        $vid= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $id=$_POST['id'];
        }
    if (empty($_POST['name'])) {
        $vname= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $name=$_POST['name'];
        }
    
    if(empty($_POST['bprice'])){
			$vbprice= "<span style='color:red;'>Required</span>";	
		}
        else
        {
            $bprice=$_POST['bprice'];
        }
        
    

    if(empty($_POST['sprice'])){
            $vsprice= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $sprice=$_POST['sprice'];
        }


    if(!empty( $name && $bprice && $sprice))  
         {

                $uppac = new db2();
                $conn=$uppac->OpenConn();   
                $userQuery=$uppac->proUpdate($conn,$id,$name,$bprice ,$sprice);
                header("Location: ../View/update.php?id=$id");
                exit();

		    
            }  
	}
 
?>
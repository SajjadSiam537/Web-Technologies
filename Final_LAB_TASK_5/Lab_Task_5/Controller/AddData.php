<?php
 include("../Model/model.php");
?>
<?php
$name='';
$vname='';
$bprice='';
$vbprice='';
$sprice='';
$vsprice='';
$message='';

if (isset($_POST['addData'])) 
{
    
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


    if(!empty( $name && $bprice && $sprice ))  
         {

                $addpac = new db2();
                $conn=$addpac->OpenConn();   
                $userQuery=$addpac->products($conn,$name,$bprice,$sprice);
                $message= "<span style='color:green;'>Successfully Add Product</span>";
		    
            }  
	}
 
?>

<?php
$place='';
$vplace='';
$dura='';
$vdura='';
$sdate='';
$vsdate='';
$edate='';
$vedate='';
$cost='';
$vcost='';
$bamount='';
$vbamount='';
$bdate='';
$vbdate='';
$oamount='';
$voamount='';
$tra='';
$vtra='';
$message='';

if (isset($_POST['submit'])) 
{
    
	if (empty($_POST['place'])) {
        $vplace= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $place=$_POST['place'];
        }
    
    if(empty($_POST['dura'])){
			$vdura= "<span style='color:red;'>Required</span>";	
		}
        else
        {
            $dura=$_POST['dura'];
        }
        
    

    if(empty($_POST['sdate'])){
            $vsdate= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $sdate=$_POST['sdate'];
        }
    

        if(empty($_POST['edate'])){
            $vedate= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $edate=$_POST['edate'];
        }
    

        if(empty($_POST['cost'])){
            $vcost= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $cost=$_POST['cost'];
        }
    

        if(empty($_POST['bamount'])){
            $vbamount= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $bamount=$_POST['bamount'];
        }

        
        if(empty($_POST['bdate'])){
            $vbdate= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $bdate=$_POST['bdate'];
        }

        
        if(empty($_POST['oamount'])){
            $voamount= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $oamount=$_POST['oamount'];
        }

        
        if(empty($_POST['tra'])){
            $vtra= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $tra=$_POST['tra'];
        }


    if(!empty( $place && $dura && $sdate && $edate && $cost && $bamount && $bdate && $oamount &&$tra ))  
         {

                $bookpac = new db();
                $conn=$bookpac->OpenConn();   
                $userQuery=$bookpac->bookpac($conn,$place,$dura,$sdate,$edate,$cost,$bamount,$bdate,$oamount,$tra);
                $message= "<span style='color:green;'>Successfully Booked Package</span>";
		    
            }  
	}
    
if (isset($_POST['submit2'])) 
{
    header("location:userDash.php");
}
 
?>
<?php
 include("../model/database.php");
?>
<?php
 $uname="";
 $puname="";
 $npass="";
 $pnpass="";
 $pmessage='';
if(isset($_POST["conClick"]))
{
   
    if (empty($_POST['uname'])) {
        $puname= "<span style='color:red;'>Required</span>";
		}
        else
        {
            $uname=$_POST['uname'];
        }
    if (empty($_POST['npass'])) {
            $pnpass= "<span style='color:red;'>Required</span>";
            }
            else
            {
                $npass=$_POST['npass'];
            }
    if(!empty($uname && $npass))  
         {

 $passc = new db();
 $conn = $passc->OpenConn();   
 $userQuery= $passc->passupdate($conn,$uname,$npass);
 $pmessage= "<span style='color:green;'>Successfully Changed Password!</span>";
         }
}
if(isset($_POST["canClick"]))
{
    header("location:login.php");
}
?>
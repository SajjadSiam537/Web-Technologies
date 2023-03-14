<?php
$name='';
$vname='';
$email='';
$vemail='';
$date='';
$vdate='';
$gender='';
$vgender='';
$degree='';
$vdegree='';
$option='';
$voption='';
error_reporting(0);

if (isset($_POST['click'])) 
{
    

        if (empty($_POST['name'])) {
        $vname= "<span style='color:red;'>Required</span>";
        }

        else if(!preg_match("/^[a-zA-Z][a-zA-Z\.\-]{2,}$/", $_POST['name'])){
            $vname= "<span style='color:red;'> Name contain a-z, A-Z, 
            period, dash only</span>";
        }
    
        else
        {
            $name= $_POST['name'];
        }

        if(empty($_POST['email'])){
            $vemail= "<span style='color:red;'>Required</span>";
        }
        else if(!preg_match("/^([a-z]+[0-9]*)@([a-z]+)\.[a-z]{2,5}$/", $_POST['email'])){
            $vemail = "<span style='color:red;'> anything@example.
            com </span>";
        }
        else
        {
            $email=$_POST['email'];
        }
    
        if(empty($_POST['date'])){
            $vdate= "<span style='color:red;'>Required</span>";
        }
        else
        {
            $date=$_POST['date'];
        }

        if(empty($_POST['gender'])){
            $vgender= "<span style='color:red;'>Select an option</span>";
        }
        else
        {
            $gender=$_POST['gender'];
        }

        if(empty($_POST['degree'])){
            $vdegree= "<span style='color:red;'>At least two of them 
            must be selected</span>";
        }

        $degreeChecked=0;
        $values = $_POST['degree'];

        $degreeChecked= count($values);

        if($degreeChecked < 2){
            $vdegree= "<span style='color:red;'>At least two of them 
            must be selected</span>";
        }
        else
        {
            $degree=$_POST['degree'];
        }

        if(empty($_POST['option'])){
            $voption= "<span style='color:red;'>Select an option</span>";
        }
        else
        {
            $option=$_POST['option'];
        }


    

        
    }

?>
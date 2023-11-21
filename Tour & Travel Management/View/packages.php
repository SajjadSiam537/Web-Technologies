<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="headerStyle.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,500&display=swap');
*
{
    font-family: 'Poppins', sans-serif;
}
        body{
            background-color: #abdbe3;  
        }
        .table
        {
            width:100%;
            text-align:center;
            padding:50px;
            background-color: #abdbe3;
        }
        .bookbut{
        width: 100%;
        height: 30px;
        border: 1px solid;
        background: red;
        border-radius: 10px;
        font-size: 14px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        }
        .bookbut:hover{
    border-color: green;
    background-color: green;
    transition: .5s;

}
        </style>
</head>
<body>
<div class="banner">
    <div class="bg-banner">
    <div class="navbar">

<img src="logo.png" class="logo">
<ul>
    <li><b><a href = "about.php"> About</a></b></li>
    <li><b><a href = "contact.php"> Contact</a></b></li>
    <li><b><a href = "gallery.php"> Gallery</a></b></li>
    <li><button class="but"><a href = "packages.php"><b> Packages</b></a></button></li>
    <li><b><a href = "login.php">Login </a></b></li>
   
</ul>
</div>
<button id="load_data">Click to See packages</button>
<button><a href = "home.php"><b> Go Back</b></a></button>
	<div 
    id="main">
	</div>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load_data").on("click",function(e){
				$.ajax({
					url:"../model/db.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script> 
    <?php
include("../view/footer.php");
?>
</body>
</html>

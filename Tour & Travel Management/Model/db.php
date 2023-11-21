<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pro";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
    $q="SELECT Place, Duration, StartDate, EndDate, Cost, BookingAmount, BookingLastDate, OfferAmount, Transport FROM package";
	$result=$conn->query($q);
    $output='<table class="table" border="0"<tr><th>Place</th><th>Duration</th><th>StartDate</th><th>EndDate</th><th>Cost</th><th>BookingAmount</th><th>BookingLastDate</th><th>OfferAmount</th><th>Transport</th><th></th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["Place"]}</td><td>{$row["Duration"]}</td><td>{$row["StartDate"]}</td><td>{$row["EndDate"]}</td><td>{$row["Cost"]}</td><td>{$row["BookingAmount"]}</td><td>{$row["BookingLastDate"]}</td><td>{$row["OfferAmount"]}</td><td>{$row["Transport"]}</td><td><a href='login.php'><button class='bookbut'>Book Now</button></a></td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "results";
}
$conn->close();
echo $output;
?>
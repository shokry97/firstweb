<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}



$city =$_GET['citty'];

echo " top 3 are : in  ".$city."<br>";


$query="SELECT customerName
FROM customers
WHERE city ='$city'
ORDER BY creditLimit desc 
LIMIT 3";


$result = $con->query($query);
//print_r($result);


if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
			echo $row['customerName']."<br>";
	}
}
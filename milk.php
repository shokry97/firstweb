<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}

$query="SELECT productName 
FROM products 
where productName like '%Davidson%'";

$result = $con->query($query);
//print_r($result);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row['productName']."<br>";
		
	}	
}

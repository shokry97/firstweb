<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}

$query="SELECT customerName, creditLimit	 
FROM customers
WHERE creditLimit > 20000";

$result = $con->query($query);
//print_r($result);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row['customerName']." -- ".$row['creditLimit']."<br>";
		
	}	
}

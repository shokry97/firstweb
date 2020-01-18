<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}

$id =$_GET['id'];

$query="SELECT *
FROM customers
WHERE customerNumber ='$id'";

$result = $con->query($query);
//print_r($result);


if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
		echo $row['customerName']." - ".$row['customerNumber']." - ".$row['customerName']." - ".$row['contactLastName']." - ".$row['contactFirstName']." - ".$row['phone']." - ".$row['addressLine1']." - ".$row['addressLine2']." - ".$row['city']." - ".$row['state']." - ".$row['postalCode']." - ".$row['country']." - ".$row['salesRepEmployeeNumber']." - ".$row['creditLimit']."<br>";
	}	
}

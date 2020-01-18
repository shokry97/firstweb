<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}

$query="SELECT customers.customerName as C, COUNT(orders.orderNumber) as O
FROM orders
JOIN customers 
ON orders.customerNumber = customers.customerNumber
GROUP BY customerName";

$result = $con->query($query);
//print_r($result);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row['C']." - ".$row['O']."<br>";
		
	}	
}

<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}

$query="
SELECT CONCAT(x.firstName, ' ',x.lastName ) as a,CONCAT(y.firstName, ' ',y.lastName ) as b
from employees X
JOIN employees Y
where y.employeeNumber=x.reportsTo
";


$result = $con->query($query);
//print_r($result);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row['a']." -> ".$row['b']."<br>";
	}	
}

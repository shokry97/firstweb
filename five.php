<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="route_company";

$con =new mysqli($servername,$dbuser,$dbpassword,$dbname);

if($con->connect_error){
	die($con->connect_error);
}

$query = "
SELECT products.productName as N,SUM(orderdetails.quantityOrdered) as q ,  (products.MSRP-products.buyPrice)*orderdetails.quantityOrdered as profit
FROM orderdetails 
JOIN products
on products.productCode = orderdetails.productCode
GROUP by products.productName
";

$result = $con->query($query);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo	$row['N']." -- ".$row['q']." -- ".$row['profit']."<br>";
	}
	
}


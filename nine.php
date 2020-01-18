<?php

$serverName="localhost";
$dbuser ="root";
$dbpassword="";
$dbName="route_company";

$con= new mysqli($serverName,$dbuser,$dbpassword,$dbName);

if($con->connect_error){
	die($con->connect_error);
}


$query="select city 
FROM customers";


$result = $con->query($query);
//print_r($result);


if($result->num_rows>0){
	?>
	<form action="night.php"  method="get">

		<select name="citty" id="citty">
<?php

	while($row=$result->fetch_assoc()){
		$c=$row['city'];
	?>	
			<option value="<?php echo $c; ?> " ><?php echo $c;   ?></option>

	<?php 
	}
	
?>
			<input href="night.php" type="submit" value="Submit">

			</select> 
	    </form>
	<?php		
}	



?>	
			
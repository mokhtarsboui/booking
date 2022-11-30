
<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=resto", "root", "");

$query = "SELECT * FROM PRODUCTS WHERE PrixProduct BETWEEN '".$_POST["minimum_range"]."' AND '".$_POST["maximum_range"]."' ORDER BY PrixProduct ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h4 style="margin-bottom:2%;"align="center">Total Products - '.$total_row.'</h4>
<div class="row">
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<div style="margin:1% auto;"class="col-md">
			<div >
				<img src="img/'.$row["ImageProduct"].'" class="img-responsive img-thumnai img-circle" />
				<h4 align="center">'.$row["NomProduct"].'</h4>
				<h3 align="center" class="text-danger">'.$row["PrixProduct"].'</h3>
				<br />
			</div>
		</div>
		';
	}
}
else
{
	$output .= '
		<h3 align="center">No Product Found</h3>
	';
}

$output .= '
</div>
';

echo $output;

?>
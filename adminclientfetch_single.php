<?php
include('adminclientdb.php');
include('adminclientfunction.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM client 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["username"] = $row["username"];
		$output["address"] = $row["address"];
		$output["email"] = $row["email"];
		$output["mobile"] = $row["mobile"];
		$output["status"] = $row["status"];
	}
	echo json_encode($output);
}
?>
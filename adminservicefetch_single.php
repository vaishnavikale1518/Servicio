<?php
include('adminservicedb.php');
include('adminservicefunction.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM product 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["username"] = $row["username"];
		$output["category"] = $row["category"];
		$output["area"] = $row["area"];
		$output["email"] = $row["email"];
		$output["mobile"] = $row["mobile"];
		$output["status"] = $row["status"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="Images/'.$row["image"].'" class="img-thumbnail" width="100" height="100" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>
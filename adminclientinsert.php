<?php
include('adminclientdb.php');
include('adminclientfunction.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$statement = $connection->prepare("
			INSERT INTO client (username, address, email, mobile) 
			VALUES (:username, :address, :email, :mobile)
		");
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':address'	=>	$_POST["address"],
				':email'	=>	$_POST["email"],
				':mobile'	=>	$_POST["mobile"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$statement = $connection->prepare(
			"UPDATE client 
			SET username = :username, address = :address, email = :email, mobile = :mobile  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':address'	=>	$_POST["address"],
				':email'	=>	$_POST["email"],
				':mobile'	=>	$_POST["mobile"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>
<?php
include('adminservicedb.php');
include('adminservicefunction.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO product (username, category, area, email, mobile, image) 
			VALUES (:username, :category, :area, :email, :mobile, :image)
		");
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':category'	=>	$_POST["category"],
				':area'	=>	$_POST["area"],
				':email'	=>	$_POST["email"],
				':mobile'	=>	$_POST["mobile"],
				':image'	=>	$image,
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE product 
			SET username = :username, category = :category, image = :image, area = :area, email = :email, mobile = :mobile  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':category'	=>	$_POST["category"],
				':area'	=>	$_POST["area"],
				':email'	=>	$_POST["email"],
				':mobile'	=>	$_POST["mobile"],
				':image'	=>	$image,
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
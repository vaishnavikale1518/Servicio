<?php

function get_total_all_records()
{
	include('adminclientdb.php');
	$statement = $connection->prepare("SELECT * FROM client");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>
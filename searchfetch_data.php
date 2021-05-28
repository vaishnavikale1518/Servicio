<?php

//searchfetch_data.php

include('searchdbcon.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE status = 'active'
	";
	if(isset($_POST["minimum_rating"], $_POST["maximum_rating"]) && !empty($_POST["minimum_rating"]) && !empty($_POST["maximum_rating"]))
	{
		$query .= "
		 AND rating BETWEEN '".$_POST["minimum_rating"]."' AND '".$_POST["maximum_rating"]."'
		";
	}
	if(isset($_POST["cat"]))
	{
		$cat_filter = implode("','", $_POST["cat"]);
		$query .= "
		 AND category IN('".$cat_filter."')
		";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND area IN('".$ram_filter."')
		";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND product_storage IN('".$storage_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="Images/'. $row['image'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['username'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['rating'] .'</h4>
					<p>Phn : '. $row['mobile'].' <br />
					Category : '. $row['category'] .' <br />
					Area : '. $row['area'] .' <br />
					Email : '. $row['email'] .'  </p>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>
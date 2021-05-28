<?php 

//index.php

include('searchdbcon.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index2.css">
</head>

<body>
    <div class="header">
           <a href="#default" class="logo">Servicio</a>
           <div class="header-right">
           <a class="active" href="http://localhost/p/miniproject/landding%20page/index.php">Home</a>
           <a href="http://localhost/p/miniproject/contact.php">Contact</a>
           <a href="http://localhost/p/miniproject/about.php">About</a>
           <a href="http://localhost/p/miniproject/transaction.php">Register For Services</a>
           </div>
           </div>
           <div style="padding-left:20px">
    </div>  
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
            <div class="header1">
                <marquee width="60%" direction="right" height="50px">
        	<h2 align="center">!!!!!Servicio Search Portal!!!!!</h2></marquee></div>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Rating</h3>
					<input type="hidden" id="hidden_minimum_rating" value="0.00" />
                    <input type="hidden" id="hidden_maximum_rating" value="5.00" />
                    <h3 id="rating_show">0 - 5.00</h3>
                    <div id="rating_range"></div>
                </div>				
                <div class="list-group">
					<h3>Category</h3>
                    <div style="height: 250px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(category) FROM product WHERE status = 'active' ORDER BY id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector cat" value="<?php echo $row['category']; ?>"  > <?php echo $row['category']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>Area</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(area) FROM product WHERE status = 'active' ORDER BY id DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['area']; ?>" > <?php echo $row['area']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
		     		
            </div>

            <div class="col-md-9" style="background-color: #FFEBCD;">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'searchfetch_data';
        var minimum_rating = $('#hidden_minimum_rating').val();
        var maximum_rating = $('#hidden_maximum_rating').val();
        var cat = get_filter('cat');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"searchfetch_data.php",
            method:"POST",
            data:{action:action, minimum_rating:minimum_rating, maximum_rating:maximum_rating, cat:cat, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#rating_range').slider({
        range:true,
        min:0.0,
        max:5.0,
        values:[1.0, 5.0],
        step:0.2,
        stop:function(event, ui)
        {
            $('#rating_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_rating').val(ui.values[0]);
            $('#hidden_maximum_rating').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>

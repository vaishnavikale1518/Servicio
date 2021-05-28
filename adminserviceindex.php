<html>
	<head>
		<title>ADMIN - Services</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="adminclient.css">
		<!--style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style-->
	</head>
	<body>
	<nav>
      <ul>
        <li><a href="http://localhost/p/miniproject/landding%20page/index.php"> HOME</a><br>
        <li><a href="http://localhost/p/miniproject/contact.php"> CONTACT</a></li>
        <li><a href="http://localhost/p/miniproject/about.php"> ABOUT</a></li>
      </ul>
    </nav>
		<div class="container box">
			<h1 align="center">ADMIN - Services</h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="20%">Username</th>
							<th width="12%">Category</th>
							<th width="10%">Area</th>
							<th width="15%">Email</th>
							<th width="18%">Mobile</th>
							<th width="5%">Status</th>
							<th width="15%">Image</th>
							<th width="5%">Edit</th>
							<th width="5%">Delete</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter Username</label>
					<input type="text" name="username" id="username" class="form-control" />
					<br />
					<label>Category</label>
					<select name="category" id="category" class="form-control">
						<option>---Category---</option>
						<option value="Plumber">Plumber</option>
						<option value="Carpenter">Carpenter</option>
						<option value="Maintenance">Maintenance</option>
						<option value="ToursTravels">ToursTravels</option>
						<option value="Mechanic">Mechanic</option>
						<option value="Tutor">Tutor</option>
						<option value="Painter">Painter</option>
						<option value="MedicalSupport">MedicalSupport</option>
						<option value="Electrician">Electrician</option>
						<option value="Transportation">Transportation</option>
						<option value="KeyMaker">KeyMaker</option>
						<option value="Sweeper">Sweeper</option>
						<option value="Builder">Builder</option>
						<option value="Security">Security</option>
						<option value="Watchman">Watchman</option>
						<option value="ShippingLagguage">ShippingLagguage</option>
						<option value="GarbageDisposal">GarbageDisposal</option>
						<option value="Packaging">Packaging</option>
						
					</select>
					<br />
					<label>Place</label>
					<select name="area" id="area" class="form-control">
						<option>---Place---</option>
						<option value="India">India</option>
						<option value="Germany">Germany</option>
						<option value="United States">United States</option>
						<option value="France">France</option>
						<option value="Australia">Australia</option>
						<option value="Others">Others</option>
					</select>
					<br />
					<label>Email ID</label>
					<input type="email" name="email" id="email" placeholder="Email Address" class="form-control">
					<br />
					<label>Phone Number</label>
					<input type="number" name="mobile" id="mobile" placeholder="Phone number" class="form-control">
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"adminservicefetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var username = $('#username').val();
		var category = $('#category').val();
		var area = $('#area').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(username != '' && email != '')
		{
			$.ajax({
				url:"adminserviceinsert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"adminservicefetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#username').val(data.username);
				$('#category').val(data.category);
				$('#area').val(data.area);
				$('#email').val(data.email);
				$('#mobile').val(data.mobile);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"adminservicedelete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>
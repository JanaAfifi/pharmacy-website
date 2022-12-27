
 <body style="background-color:powderblue;">
<form action="addPatient.php" method="post">
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PHN: <input type="text" name="PHN"><br>
  <br>Address: <input type="text" name="Address"><br>
  <br>First Name: <input type="text" name="FirstName"><br>
  <br>Last Name: <input type="text" name="LastName"><br>
  <br>Phone Number: <input type="text" name="PhoneNumber"><br>
  <br>Date Of Birth: <input type="text" name="DateOfBirth"><br> 
  
 <html>
	<head>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Allergies: <input type="text" name="name[]" id="name" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
					</div>
			</div>
		</div>
	</body>
</html>
  <!-- <html>
	<head>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<div class="form-group">
				<form Allergy="add_Allergy" id="add_Allergy">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Allergy: <input type="text" name="Allergy[]" id="Allergy" class="form-control Allergy_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
					</div>
			</div>
		</div>
	</body>
</html> -->
   </center> 
<center><br><input type="submit" value="Add"></center> 



<!-- 
<html>
	<head>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
					</div>
			</div>
		</div>
	</body>
</html> -->
<!--<html>
	<head>
		<title>Webslesson Demo - Dynamically Add or Remove input fields in PHP with JQuery</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<h2 align="center"><a href="http://www.webslesson.info/2016/02/dynamically-add-remove-input-fields-in-php-with-jquery-ajax.html" title="Dynamically Add or Remove input fields in PHP with JQuery">Dynamically Add or Remove input fields in PHP with JQuery</a></h2><br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>-->

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
});
</script>
 


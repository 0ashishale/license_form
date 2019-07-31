<!DOCTYPE html>
<html>
<head>
	<title>Driving Licensce Form</title>
</head>
<body>
<form method="POST" action="{{route('yatayat.store')}}" enctype="multipart/form-data">
	@csrf
	<label>Name: </label> <br />
	<input type="text" name="name" placeholder="Name"> <br />
	<label>Father Name: </label> <br />
	<input type="text" name="fathername" placeholder="Father Name"><br /> <br />
	<label>Gender: </label> <br />
	<input type="radio" name="gender" value="male">Male <br />
	<input type="radio" name="gender" value="female">Female<br />
	<input type="radio" name="gender" value="other">Other <br /> <br />

	<label>Nationality: </label>
	<select name="nationality">
		<option value="nepal">Nepal</option>
		<option value="india">India</option>
		<option value="china">China</option>
		<option value="australia">Australia</option>
	</select> <br /> <br />
	<label>Past Categories: </label><br />
	<input type="checkbox" name="past_catagory[]" value="bike">Bike <br />
	<input type="checkbox" name="past_catagory[]" value="scooter">Scooter <br />
	<input type="checkbox" name="past_catagory[]" value="heavy">Heavy <br />
	<input type="checkbox" name="past_catagory[]" value="light">Light 
	<br /> <br />
	<lable>Apply For : </lable><br />
	<select name="apply_for">
		<option value="bike">Bike</option>
		<option value="scooter">Scooter</option>
		<option value="heavy">Heavy</option>
		<option value="light">Light</option>
	</select> <br /> <br />

	<label>Picture :</label> <br />
	<input type="file" name="image">
	<br /> <br />
	<button type="Submit">Submit</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>New Patient Registration</title>
</head>
<body>
	<div class="wrapper">
		<div class="title">
			New Patient Registration
		</div>
		<h5> Please fill in the form below </h5>
		<br>
		<div class="form">       
			<form action="connect.php"method="post">
				<div class="inputfield">
					<label for="name">FullName</label>
					<input type="text" class="input" name="name">
				</div> 
			
				<div class="inputfield">
					<label for="email">Email Address</label>
					<input type="text" class="input" name="email">
				</div>  
			
				<div class="inputfield">
					<label for="gender">Gender</label>
					<div>
						<input type="radio" id="male" name="gender" value="male">
							<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female">
							<label for="female">Female</label>
						<input type="radio" id="other" name="gender" value="other">
							<label for="other">Other</label>
					</div>
				</div> 
				<div class="inputfield">
					<label for="birthday">Date Of Birth</label>
					<input type="date" class="input" name="birthday">

				</div>

				<div class="inputfield">
					<label for="Height">Height(Inches)</label>
					<input type="text" class="input" name="Height">
				</div>  

				<div class="inputfield">
					<label for="weight">weight(Pounds)</label>
					<input type="text" class="input"name="weight">
				</div>  
				<hr>
				<br>
				
				<div class="inputfield">
					<label for="Contact" >Contact Number</label>
					<input type="text" class="input" name="Contact">
				</div>  
				
				<div class="inputfield">
					<label for="Marital">Marital Status</label>
					<div class="custom_select">
						<select name="Marital">
							<option value=""></option>
							<option value="Single">Single</option>
							<option value="married">married</option>
							<option value="Divorced">Divorced</option>
							<option value="LegallySeparated">Legally Separated</option>
							<option value="Widowed">Widowed</option>
						</select>
					</div>
				</div> 
    
				<div class="inputfield">
					<label for="textarea">Address</label>
					<textarea class="textarea" name="textarea"></textarea>
				</div> 
				<hr>
				<br>
				<p style="color:blue;">In case Of emergency.....</p>
				<br> 
				<div class="inputfield">
					<label for="f2name">Full  Name</label>
					<input type="text" class="input" name="f2name">
				</div> 

				<div class="inputfield">
					<label for="Relationship">Relationship</label>
					<input type="text" class="input" name="Relationship">
				</div> 

				<div class="inputfield">
					<label for="Contact2">Contact Number</label>
					<input type="text" class="input" name="Contact2">
				</div> 

				<div class="inputfield">
					<label for="Postal">Postal Code</label>
					<input type="text" class="input" name="Postal">
				</div> 
			
				<div class="inputfield terms">
					<label class="check">
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<p>Agreed to terms and conditions</p>
				</div> 

				<div class="inputfield">
					<input type="submit" value="Register" class="btn">
				</div>
			</form>	
		</div>
	</div>	
</body>
</html>
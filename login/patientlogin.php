<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css"/>    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>

	</head>
<body>

	<form action="data.php" id="id01" class="modal-content animate" method="POST">
		<div class="closecontainer">
			<span onclick="document.getElementById('id01')" class="close" title="Close">&times;</span> 
		</div>
	
		<div class="container">
			<center><h2>Patient Login </h2></center><br/><br/>
			<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
							
						<input type="text" placeholder="Enter Username" name="username" required/>
						</div>
		
			<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
							
						<input type="password" placeholder="Enter Password" name="pass" required/>
						</div>
			
			<button type="submit">Login</button>	
			<br>
			<button onclick="parent.location='../index.php'" class="cancelbtn">Cancel</button>
			
		</div>
	
		
	</form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
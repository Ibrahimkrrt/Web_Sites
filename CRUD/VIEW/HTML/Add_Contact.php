<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adding</title>
	<link rel="stylesheet" type="text/css" href="../CSS/MyCss.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700" rel="stylesheet"> 
</head>
<body>
	<div class="container_00"> 
		<div class="Support">
			<h1>Add new Contact</h1>
		</div>
		<span class="Error">
			<h1> Error Log</h1>
			<?php
			session_start();
			if ( !isset($_SESSION["ERROR"]) || empty($_SESSION["ERROR"])) {	echo "";	}
			else 					{ echo $_SESSION["ERROR"]; $_SESSION["ERROR"]="";	} 
			?>
		</span>
		<form action="../../CONTROLLER/Add.php" method="GET" class="Form_sty" >
			<div>
				<span>
				<label class="Lbl"> First Name : </label>
				<input class="Ipt" Type="text" name="F_Name"><br>
				<label class="Lbl"> Last Name : </label>
				<input class="Ipt" Type="text" name="L_Name"><br>
				<label class="Lbl" id="Adjust"> Sexe : </label>
				<span class="gender_sty">
					<p> Male	</p> <input Type="radio" name="Gender" value="Men">
					<p> Female	</p> <input Type="radio" name="Gender" value="Women">
				</span><br>
				<label class="Lbl"> Phone Number : </label>
				<input class="Ipt" Type="text" name="Ph_Num"><br>
				<label class="Lbl"> Mail : </label>
				<input class="Ipt" Type="email" name="E_Mail"><br>
				<input class="sbt" Type="submit" name="Send" value="Add" >
				<input class="sbt" Type="submit" name="Cancel" value="Clear" >
				</span>
			</div>
		</form>
	</div>

	<footer>
		<button onclick="goBack()">&#x25C0;</button>
		<h1> Go Back</h1>
	</footer>






<script>
	function goBack() {
	    window.history.back();
	}
</script> 
</body>
</html> 


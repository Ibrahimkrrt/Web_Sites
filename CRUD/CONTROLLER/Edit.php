<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="../VIEW/CSS/MyCss.css">
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

			$val = ($_SESSION["CONTACTS"][$_GET["POS"]]["Gender"]=="Women") ? "checked" : "";
			
			?>
		</span>
		<form action="Edit.php?POS=<?=$_GET["POS"]?>" method="POST" class="Form_sty">
			<div>
				<span>
					<label class="Lbl"> First Name : </label>
					<input class="Ipt" Type="text" name="F_Name" value="<?=$_SESSION["CONTACTS"][$_GET["POS"]]["First_Name"]?>"><br>
					<label class="Lbl"> Last Name : </label>
					<input class="Ipt" Type="text" name="L_Name" value="<?=$_SESSION["CONTACTS"][$_GET["POS"]]["Last_Name"]?>"><br>
					<label class="Lbl" id="Adjust"> Sexe : </label>
					<span class="gender_sty">
						<p>Male		</p> <input Type="radio" name="Gender" value="Men" checked >
						<p>Female	</p> <input Type="radio" name="Gender" value="Women" <?=$val?> >
					</span><br>
					<label class="Lbl"> Phone Number : </label>
					<input class="Ipt" Type="text" name="Ph_Num" value="<?=$_SESSION["CONTACTS"][$_GET["POS"]]["Phone_N"]?>"><br>
					<label class="Lbl"> Mail : </label>
					<input class="Ipt" Type="email" name="E_Mail" value="<?=$_SESSION["CONTACTS"][$_GET["POS"]]["Email"]?>"><br>
					<input class="sbt" type="hidden" name="POS" value="<?=$_GET["POS"]?>" >
					<input class="sbt" Type="submit" name="Edit" value="Save" >
				</span>
			</div>
		</form>
	</div>
		<?php 

if (isset($_POST["Edit"])) {
	# Prevent save if there is no empty input----------------------------------------
	if (empty($_POST["F_Name"])) { $_SESSION["ERROR"] .= "First Name, " ;}			#
	if (empty($_POST["L_Name"])) { $_SESSION["ERROR"] .= "Last Name, " ;}			#
																					#
	try 				{ 	if (empty($_GET["Gender"])) { } }						#
	catch(Exception $e)	{	$_SESSION["ERROR"] .= "Sexe, " ;}						#
																					#
	if (empty($_POST["Gender"])) { $_SESSION["ERROR"] .= "Sexe, " ;}				#
	if (empty($_POST["Ph_Num"])) { $_SESSION["ERROR"] .= "Phone Number, " ;}		#
	if (empty($_POST["E_Mail"])) { $_SESSION["ERROR"] .= "Mail, " ;}				#
	if (!empty($_SESSION["ERROR"])) { 												#
		$_SESSION["ERROR"] .= " not set ";											#
		header('Location: Edit.php?POS='."$_POST[POS]".'');							#
	}																				#
	
	# Save the new values------------------------------------------------------------
	else {																			#
		$_SESSION["CONTACTS"][$_GET["POS"]]["First_Name"]	= $_POST["F_Name"];		#
		$_SESSION["CONTACTS"][$_GET["POS"]]["Last_Name"]	= $_POST["L_Name"];		#
		$_SESSION["CONTACTS"][$_GET["POS"]]["Gender"]		= $_POST["Gender"];		#			
		$_SESSION["CONTACTS"][$_GET["POS"]]["Phone_N"]		= $_POST["Ph_Num"];		#
		$_SESSION["CONTACTS"][$_GET["POS"]]["Email"]		= $_POST["E_Mail"];		#
		header('Location: ../VIEW/HTML/View_Contact.php');							#
	}
}

?>


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
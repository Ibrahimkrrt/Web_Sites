<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="../CSS/MyCss.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700" rel="stylesheet"> 
</head>
<body>
	<div class="container_00">
		<div class="Support">
			<h1>Contact List</h1>
		</div>
		<div id="table_container">
			<?php 
				session_start();
				if (!isset($_SESSION["DATA"])) {	?>
			<div class="container_01">
				<div class="Sub_container_01">
					
				Empty Contact plz <br>
				<a href="Add_Contact.php"> Add a new one</a>
					
				</div>
			</div>

			<?php ;} 
			
						else {	?>
			<div class="Centered_Table">
				<table>
					<tr> 
						<th>First Name</th>
						<th>Last Name</th>
						<th>Gender</th>
						<th>Phone Number</th>
						<th>Email</th>
					</tr>
					<?php
					foreach ($_SESSION["CONTACTS"] as $contact ) {	?>
					<?php $POSITION=array_search($contact, $_SESSION["CONTACTS"])?>
					<tr>
						<td><?=$contact["First_Name"]?></td>
						<td><?=$contact["Last_Name"]?></td>
						<td><?=$contact["Gender"]?></td>
						<td><?=$contact["Phone_N"]?></td>
						<td><?=$contact["Email"]?></td>
						<td class="Remove_Style_01"><a id="Edit_btn" href="../../CONTROLLER/Edit.php?POS=<?=$POSITION ?>">Edit</a></td>
						<td class="Remove_Style_01"><a id="Remove_btn" href="../../CONTROLLER/Remove.php?POS=<?=$POSITION ?>">Remove</a></td>
					</tr>
					<?php ;} ?>
					<tr >
						<td colspan="5" class="Remove_Style" ><a href="Add_Contact.php">Add Contact</a></td>
					</tr>
		
				</table>
			<?php ;} ?>
	
			</div>
		<div>
			
		</div>
	</div>


	<footer>
		<button onclick="Home()">&#x25C9;</button>
		<h1> Home</h1>
	</footer>






<script>
	function Home() {
	    location.href = "index.html";
	}
</script> 
</body>
</html>
<?php
session_start();

#var
$_SESSION["ERROR"]		= "";
if (!isset($_SESSION["CONTACTS"])) {$_SESSION["CONTACTS"] = array();} 	
#


if (empty($_GET["F_Name"])) { $_SESSION["ERROR"] .= "First Name, " ;}
if (empty($_GET["L_Name"])) { $_SESSION["ERROR"] .= "Last Name, " ;}
try {
	if (empty($_GET["Gender"])) { }
}
catch(Exception $e){
	$_SESSION["ERROR"] .= "Sexe, " ;
}
if (empty($_GET["Gender"])) { $_SESSION["ERROR"] .= "Sexe, " ;}
if (empty($_GET["Ph_Num"])) { $_SESSION["ERROR"] .= "Phone Number, " ;}
if (empty($_GET["E_Mail"])) { $_SESSION["ERROR"] .= "Mail, " ;}
if (!empty($_SESSION["ERROR"])) { 
	$_SESSION["ERROR"] .= " not set ";
	header('Location: ../VIEW/HTML/Add_Contact.php');
}
else {
	$index = sizeof($_SESSION["CONTACTS"]);
	$_SESSION["CONTACTS"][$index]["First_Name"]	= $_GET["F_Name"];
	$_SESSION["CONTACTS"][$index]["Last_Name"]	= $_GET["L_Name"];
	$_SESSION["CONTACTS"][$index]["Gender"]		= $_GET["Gender"];
	$_SESSION["CONTACTS"][$index]["Phone_N"]	= $_GET["Ph_Num"];
	$_SESSION["CONTACTS"][$index]["Email"]		= $_GET["E_Mail"];
	$_SESSION["DATA"] = true;
	header('Location: ../VIEW/HTML/View_Contact.php');
}
?>
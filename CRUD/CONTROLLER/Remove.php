<?php 
session_start();

$_GET["POS"];
unset($_SESSION["CONTACTS"][$_GET["POS"]]); 

if (sizeof($_SESSION["CONTACTS"])==0) {
	unset($_SESSION["DATA"]);
}

header('Location: ../VIEW/HTML/View_Contact.php');
?>
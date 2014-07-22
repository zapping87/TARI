<?php
	session_start();

	$id = $_GET["id"];

	$conn = mysql_connect("localhost", "lia", "lia") OR die("Error: " . mysql_error());
	mysql_select_db("lia", $conn);

	mysql_query("DELETE FROM carrello WHERE IDArticolo = $id AND IDUtente = {$_SESSION["IDUtente"]}");

	header("Location: carrello.php");
?>
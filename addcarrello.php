<?php
	session_start();

	$id = $_POST["id"];

	$conn = mysql_connect("localhost", "lia", "lia") OR die("Error: " . mysql_error());
	mysql_select_db("lia", $conn);

	mysql_query("INSERT INTO carrello (IDUtente, IDArticolo) VALUES({$_SESSION["IDUtente"]}, $id)");

	header("Location: index.php");
?>
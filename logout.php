<?php
	session_start();

	$_SESSION["logged"] = false;
	unset($_SESSION["IDUtente"]);
	unset($_SESSION["username"]);

	session_destroy();
	header("Location: index.php");
?>
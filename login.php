<?php
	session_start();

	if(!isset($_SESSION["logged"]) || $_SESSION["logged"] == false) {
		$username = isset($_POST["login-username"]) ? $_POST["login-username"] : "";
		$password = isset($_POST["login-password"]) ? $_POST["login-password"] : "";

		$conn = mysql_connect("localhost", "lia", "lia") OR die("Error: " . mysql_error());
		mysql_select_db("lia", $conn);
		$query = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";

		$result = mysql_query($query, $conn) OR die("Error: " . mysql_error());
		$row = mysql_fetch_assoc($result);
		if(mysql_num_rows($result) == 1) {
			$_SESSION["logged"] = true;
			$_SESSION["IDUtente"] = $row["ID"];
			$_SESSION["username"] = $username;
		}
		mysql_free_result($result);
	}
	
	header("Location: index.php");
?>

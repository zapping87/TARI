<?php
	session_start();
	if(!isset($_SESSION["logged"]) || $_SESSION["logged"] !== true)
		header("Location: index.php");

	$page = basename(__FILE__);
	require_once("top.php");

	$query_carrello = "SELECT * FROM carrello WHERE IDUtente = {$_SESSION["IDUtente"]}";
	$result = mysql_query($query_carrello);
	if(mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$query_compra = "INSERT INTO compra VALUES ({$_SESSION["IDUtente"]}, {$row["IDArticolo"]})";
			mysql_query($query_compra);
		}
		$query_carrello = "DELETE FROM carrello WHERE IDUtente = {$_SESSION["IDUtente"]}";
		mysql_query($query_carrello);

		$query_email = "SELECT eMail FROM utenti WHERE ID = {$_SESSION["IDUtente"]}";
		$result = mysql_query($query_email);
		$row = mysql_fetch_assoc($result);

		$to = $row["eMail"];
		$subject = "Conferma acquisto";
		$message = "Grazie per aver acquistato sul nostro sito.";
		$from = "vane_andre@unica.it";
		$headers = "From: $from";
		//mail($to, $subject, $message, $headers);
		echo "<h2>Acquisto effettuato con successo</h2>";
	} else
		header("Location: index.php");

	require_once("sidebar.php");
	require_once("bottom.php");
?>

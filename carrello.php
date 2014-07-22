<?php
	session_start();
	if(!isset($_SESSION["logged"]) || $_SESSION["logged"] !== true)
		header("Location: index.php");

	$page = basename(__FILE__);
	require_once("top.php");

	$query = "SELECT * FROM carrello, articoli WHERE IDUtente = {$_SESSION["IDUtente"]} AND IDArticolo = ID";
	$result = mysql_query($query);
?>

<h1>Carrello</h1>

<br /><br />

<table style="width: 100%">
	<tr>
		<th>Oggetto</th>
		<th style="text-align: right;">Prezzo</th>
		<th>&nbsp;</th>
	</tr>
<?php
	$sum = 0;
	while($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>{$row["marca"]} {$row["modello"]}</td>";
		echo "<td style=\"text-align: right;\">" . number_format((double)$row["prezzo"], 2, ",", ".") . " €</td>";
		echo "<td style=\"text-align: center;\"><a href=\"delcarrello.php?id={$row["IDArticolo"]}\">Elimina</td></td>";
		echo "</tr>";
		$sum += (double)$row["prezzo"];
	}
?>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: right;"><strong>Totale:</strong> 
<?php
	echo number_format($sum, 2, ",", ".") . " €";
?>
		</td>
		<td style="text-align: center;"><?php if(mysql_num_rows($result) > 0) { ?><form method="post" action="conferma.php"><input type="submit" value="Acquista!" name="invia" id="invia" /></form><?php } else echo "&nbsp;"; ?></td>
	</tr>
</table>

<?php
	require_once("sidebar.php");
	require_once("bottom.php");
?>

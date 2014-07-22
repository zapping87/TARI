<?php
	$page = basename(__FILE__);
	require_once("top.php");

	if(isset($_GET["marca"]))
		$query = "SELECT * FROM articoli WHERE marca = '{$_GET["marca"]}'";
	else
		$query = "SELECT * FROM articoli";
?>

<table style="width: 100%" id="grid">
	<?php
		$cont = 0;
		$result = mysql_query($query, $conn) OR die("Error: " . mysql_error());
		while($row = mysql_fetch_assoc($result)) {
			if($cont == 0)
				echo "<tr>";
			echo "<td>
				<a href=\"detail.php?id={$row["ID"]}\"><img src=\"images/{$row["ID"]}_s.jpg\" alt=\"\" title=\"{$row["marca"]} {$row["modello"]}\" onmouseover=\"showPreview('images/{$row["ID"]}_n.jpg');\" onmouseout=\"hidePreview();\" />
				<br />{$row["marca"]} {$row["modello"]}</a>
				</td>";
			$cont = ($cont + 1) % 4;
			if($cont == 0)
				echo "</tr>";
		}
		if($cont != 0)
			for(; $cont < 4; $cont++)
				echo "<td>&nbsp;</td>";
		mysql_free_result($result);
	?>
</table>

<?php
	require_once("sidebar.php");
	require_once("bottom.php");
?>
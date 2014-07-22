<?php
	$page = basename(__FILE__);
	require_once("top.php");

	$result = mysql_query("SELECT * FROM articoli WHERE ID=" . $id, $conn) OR die("Error: " . mysql_error());
	$row = mysql_fetch_assoc($result);
?>

<table class="detail">
	<tr>
		<td rowspan="11"><img src="images/<?php echo $id; ?>_n.jpg" alt="" title="" /></td>
		<td colspan="2"><div class="modello"><?php echo $row["marca"] ?> <?php echo $row["modello"]; ?></div></td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="prezzo">Prezzo: <?php echo $row["prezzo"] ?> €</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
<?php
	if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
?>
			<form action="addcarrello.php" method="post">
				<div class="centered">
					<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
					<input type="submit" id="compra" name="compra" value="Aggiungi al carrello!" />
				</div>
			</form>
<?php
	} else
		echo "<span style=\"font-size: 14px; text-align: center; font-style: italic\">Fai il login o <a href=\"register.php\">registrati</a> per poter acquistare</span>";
?>
		</td>
	</tr>

	<script type="text/javascript">
		<!--
		var i = <?php echo $id - 1; ?>;
		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Sistema Operativo</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("so")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Wifi</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("wifi")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Bluetooth</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("bt")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Fotocamera</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("foto")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Memoria</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("mem")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">GPS</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("gps")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Touchscreen</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("touch")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Quad-Band</span>");
		document.write("\n\t\t</td>\n\t\t<td>");
		document.write(x[i].getElementsByTagName("quad")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");

		document.write("\t<tr>\n\t\t<td>");
		document.write("&nbsp;");
		document.write("\n\t\t</td>\n\t\t<td colspan=\"2\">");
		document.write("&nbsp;");
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>\n</table>");

		document.write("\n<table class=\"detail\">\t<tr>\n\t\t<td>");
		document.write("<span class=\"label\">Descrizione</span>");
		document.write("\n\t\t</td>\n\t</tr>\n\t<tr>\t\t<td>");
		document.write(x[i].getElementsByTagName("descrizione")[0].childNodes[0].nodeValue);
		document.write("\n\t\t</td>");
		document.write("\n\t</tr>");
		-->
	</script>
</table>

<?php
	require_once("sidebar.php");
	require_once("bottom.php");
?>

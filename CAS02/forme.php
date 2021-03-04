<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title</title>
</head>
<body>
	<form action="#" method="GET">
		ime<br/>
		<input type="text" name="ime" placeholder="Idemooo">
		<br/>
		prezime<br/>
		<input type="text" name="prezime">
		<br/>
		
		Opis<br/>
		<textarea rows="5" cols="30" name="opis"></textarea><br/>
		Lista polzenih predmeta<br/>
		<input type="checkbox" name="polozeno" value="uup">uup<br/>
		<input type="checkbox" name="polozeno" value="pj" checked="checked">pj<br/>
		<input type="checkbox" name="polozeno" value="oop" checked="checked">oop<br/>
		Omiljeni predmet<br/>
		<input type="radio" name="predmet" value="uup" checked="checked">uup<br/>
		<input type="radio" name="predmet" value="pj">pj<br/>
		<input type="radio" name="predmet" value="oop">oop<br/>
		Koji predmet sludste<br/>
		<select name="slusam">
			<option value="">slusam</option>
			<option value="uup">Uvod u proramnje</option>
			<option value="pj">pj</option>
			<option value="oop">oop</option>
			<option value="ip" selected="selected">ip</option>
		</select>
		
		<br/><input type="submit" name="action" value="Snimi"><br/>
		<br/><input type="reset" name="action" value="reeset"><br/>
	</form>
	<br/><br/>
	<form action="#" method="GET">
		<input type="text" name="ime">
		<input type="hidden" name="id" value="44">
		<input type="submit" name="action" value="Pretrazi">
	</form>
	
	<br/><br/>
	<h2>HTML5</h2>
	<form action="#" method="GET">
		ime <input type="text" name="ime" required="required"><br/>
		broj <input type="number" name="godine" required min="5" max="99" step="5"><br/>
		datum <input type="date" name="rodjenje"><br/>
		boja <input type="color" name="boja">
		<input type="submit" name="action" value="Posalji"><br/>
	</form>
</body>
</html>
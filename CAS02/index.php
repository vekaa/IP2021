<?php
    echo "IJAOOO</br>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h2>Tabele</h2>
	<table border="2" width="80%">
		<tr>
			<th colspan="2">Ime i Prezime</th>
			<th>Prosek</th>
		</tr>
		<tr>
			<td>Ime</td>
			<td>Prezime</td>
			<td>Prosek</td>
		</tr>
		<tr>
			<td>Ime</td>
			<td rowspan="2">Prezime</td>
			<td>Prosek</td>
		</tr>
		<tr>
			<td>Ime</td>
			<td>Prosek</td>
		</tr>
		<tr>
			<td>Ime</td>
			<td>Prezime</td>
			<td>Prosek</td>
		</tr>
	</table>

<br/><br/>
	<table border="2" width="80%" align="center">
		<tr height="200px">
			<th colspan="2">HEADER</th>
		</tr>
		<tr>
			<td width="20%">
				<ul>
					<li>Link 1</li>
					<li>Link 2</li>
					<li>Link 3</li>
				</ul>
			</td>
			<td>CONTENT</td>
		</tr>
		<tr height="150px">
			<th colspan="2">
				<table border="2" width="100%">
					<tr>
						<td>F1</td>
						<td>F2</td>
						<td>F3</td>
					</tr>
				</table>
			</th>
		</tr>
	</table>
	
	
</body>
</html>
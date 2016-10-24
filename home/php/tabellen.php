<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabellen</title>
		<link rel="stylesheet" href="../formate.css" type="text/css">
	</head>
	
	<body>
		<h3>Tablellen</h3>
		
		<h6>Beispieltabelle</h6>
		<table>
			<tr>
				<th>Artist</th> <th>Title</th> <th>Album</th> <th>Year</th> <th>Genre</th>
			</tr>
			<tr>
				<td>Robin Schulz Feat. Ilsey</td> <td>Headlight</td> <td>Bravo Hits 89</td> <td>2015</td> <td>House</td>
			</tr>
			<tr>
				<td>Felix Jaehn Feat. Jasmine Thompson</td> <td>Ain't Nobody (Love Me Better)</td> <td>Bravo Hits 89</td> <td>2015</td> <td>Elekro</td>
			</tr>
			<tr>
				<td>Kygo Feat. Parson James</td> <td>Stole The Show</td> <td>Bravo Hits 89</td> <td>2015</td> <td>Pop</td>
			</tr>
			<tr>
				<td>Klingande</td> <td>Riva (Restart The Game)</td> <td>Bravo Hits 89</td> <td>2015</td> <td>Pop</td>
			</tr>
			<tr>
				<td>Major Lazer X DJ Snake Feat. MØ</td> <td>Lean On</td> <td>Bravo Hits 89</td> <td>2015</td> <td>House</td>
			</tr>
		</table>
		
		<form action="tabellen.php" method="get">
			<p>aktion:
				<input type="text" name="tabelle" />
			</p>
			
			<p>
				<input type="submit" value="senden" />
			</p>
		</form>
		
	<a href="../index.html">zurück</a>
	</body>
</html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Notizen</title>
		<link rel="stylesheet" href="../formate.css" type="text/css">
	</head>
	
	<body>
		<p>
			<h3>Notizen:</h3>
			<ul id="notizen">
			
			</ul>
		</p>
		
		<p>
			info:</br>
			Durch "Notiz hinzufügen" wird ein Dialogfenster geöffnet.</br>
			Der eingegebene Text wird in eine Liste aufgenommen.</br>
			Die Liste wird beim reload wieder gelöscht.</br>
			"Notzien senden" hat noch keine Funktion.</br>
			In das Textfeld "text1" können beliebige Zeichen eingegeben werden.</br>
			Mit "senden" wird der Text an den Server geschickt.</br>
			"rc" gibt die Anzahl der Zeichen+Zeilenumbruch(rn) zurück.</br>
			Die Texte werden auf dem Server unter http://lucaroli.bplaced.net/musikbib/home/php/history.txt gespeichert.
		</p>
		
		<p>
		<button type="button" id="btn_add">Notiz hinzufügen</button>
		<button type="button" id="btn_send">Notizen senden</button>
		</p>
		
		<script> 
			'use strict';
			document.getElementById("btn_add").onclick = neue_notiz;
			//document.addEventListener('click', neue_notiz)
						
			function neue_notiz(){
			
				var notiz_text = '';
				notiz_text = prompt('Bitte eine Notiz eingeben', 'Notiz');
				
				var handle_notizen = document.getElementById('notizen');	//Zugriff auf Objekt, was verändert werden soll (Liste)
				var notiz_element = document.createElement('li');			//Objekt erzeugen, welches hinzugefügt wird (Listenelement)
				
				notiz_element.innerHTML = notiz_text;
				handle_notizen.appendChild(notiz_element);
			}	
		</script>
		
		<form action="notizen.php" method="get">
			<p>text1:
				<input type="text" name="notiz" />
			</p>
			
			<p>
				<input type="submit" value="senden" />
			</p>
		</form>
		
		<?php
			if(isset($_GET['notiz']) == true)
			{
				echo 'übermittelter Paratemer: '.$_GET['notiz'].'<br/>';
				$fh = fopen('history.txt', 'a');
				$rc = fwrite($fh, $_GET['notiz']."\r\n");
				echo 'rc: '.$rc;
				fclose($fh);
			}
		?>
	
		<a href="../index.html">zurück</a>
	</body>
	
</html>
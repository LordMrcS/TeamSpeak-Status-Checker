<?php

header('Content-Type: image/png');	// Content-Type im HTTP-Response-Header setzen

if($socket = @fsockopen('Add IP of TS-Server here', 10011, $errno, $errstr, 2)) { // IF: Teamspeak-Server erreichbar
	$image = 'online.png';
}

else {	//ELSE: Teamspeak-Server nicht erreichbar
	$image = 'offline.png';
}

@stream_set_timeout($socket, 4); //Timeout für Netzwerkverbindung festlegen

readfile($image);	// Bild einlesen und in Outputpuffer schreiben

?>

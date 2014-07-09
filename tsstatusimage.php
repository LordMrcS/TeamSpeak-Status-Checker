<?php

header('Content-Type: image/png');	// Content-Type im HTTP-Response-Header setzen

if($socket = @fsockopen('speedy.a40gaming.de', 10011, $errno, $errstr, 2)) { // IF: Teamspeak-Server erreichbar
	$image = 'http://static.a40gaming.de/ts/online.png';
}

else {	//ELSE: Teamspeak-Server nicht erreichbar
	$image = 'http://static.a40gaming.de/ts/offline.png';
}

@stream_set_timeout($socket, 4); //Timeout für Netzwerkverbindung festlegen

readfile($image);	// Bild einlesen und in Outputpuffer schreiben
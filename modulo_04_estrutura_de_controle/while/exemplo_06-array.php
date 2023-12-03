<?php
	
	$games = array (
		"Sega" => "Sonic",
		"Nintendo" => "Super Mario",
		"PlayStartion" => "PES",
		"PC Games" => "Naruto Storm 4",
		"X Box" => "Call of Duty"
		);

var_dump($games);
echo "<hr>";

$games[6][1] = "GameBoy";

var_dump($games);
echo "<hr>";


echo current($games);
echo "<br>";
echo end($games);


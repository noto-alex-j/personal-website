<?php

$player1 = "X";
$player2 = "O";


$currentboard = implode($_GET);

/* ----Takes $_GET and adds appropriate query ending, to be added to end of string to make link---- */

function linkappender1 ($player1) {
	$currentboard = implode($_GET);
	foreach ($player1 as $boxnumber => $entry) {
		if ($currentboard == "") {
			$player1[$boxnumber] = $entry . "=X";
		}
		else {
			$player1[$boxnumber] = "&" . $entry . "=X";
		}
	}
	return $player1;
}

function linkappender2 ($player2) {
	$currentboard = implode($_GET);
	foreach ($player2 as $boxnumber => $entry) {
		if ($currentboard == "") {
			$player2[$boxnumber] = $entry . "=O";
		}
		else {
			$player2[$boxnumber] = "&" . $entry . "=O";
		}
	}
	return $player2;
}

/* Player 1 and 2 arrays fed into link appender to generate appropriate link endings */
/* The generated link endings are then affixed to the existing $_GET string and become new hrefs */

$player1 = array(0,1,2,3,4,5,6,7,8);
$player2 = array(0,1,2,3,4,5,6,7,8);

$links1 = linkappender1($player1);
$links2 = linkappender2($player2);

/* ------ Switches player turn based on last element in query param ------ */

if (end($_GET) == "X") {
	$links = $links2;
}
elseif (end($_GET) == "O") {
	$links = $links1;
}
else {
	$links = $links1;
}













/* ------ List of box links for Player 1 and Player 2 ------ 

$xsquare1 = "X--------";
$xsquare2 = "-X-------";
$xsquare3 = "--X------";
$xsquare4 = "---X-----";
$xsquare5 = "----X----";
$xsquare6 = "-----X---";
$xsquare7 = "------X--";
$xsquare8 = "-------X-";
$xsquare9 = "--------X";

$osquare1 = "O--------";
$osquare2 = "-O-------";
$osquare3 = "--O------";
$osquare4 = "---O-----";
$osquare5 = "----O----";
$osquare6 = "-----O---";
$osquare7 = "------O--";
$osquare8 = "-------O-";
$osquare9 = "--------O";



 ---- Takes the current board layout query and the new board layout query and merges them ---- 

function boardpositionchanger($first,$second) {
	$first = str_split($first);
	$second = str_split($second);
	foreach ($first as $firstkey => $boardarrange) {
		if ($first[$firstkey] == "-" && $second[$firstkey] == ("X" || "O")) {
			if ($first[$firstkey] == "X" && $second[$firstkey] == "O" || $first[$firstkey] == "O" && $second[$firstkey] == "X") {
			}
			else {
				$first[$firstkey] = $second[$firstkey];
			}
		}
	}
	return $first;
}

*/




?>
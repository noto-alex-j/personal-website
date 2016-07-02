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


/* --------- Determines winning board arrangement ----------- */

$xwin = array(
	array(0=>"X",1=>"X",2=>"X"),
	array(3=>"X",4=>"X",5=>"X"),
	array(6=>"X",7=>"X",8=>"X"),
	array(0=>"X",3=>"X",6=>"X"),
	array(1=>"X",4=>"X",7=>"X"),
	array(2=>"X",5=>"X",8=>"X"),
	array(0=>"X",4=>"X",8=>"X"),
	array(2=>"X",4=>"X",6=>"X")
);

$owin = array(
	array(0=>"O",1=>"O",2=>"O"),
	array(0=>"O",1=>"O",2=>"O"),
	array(6=>"O",7=>"O",8=>"O"),
	array(0=>"O",3=>"O",6=>"O"),
	array(1=>"O",4=>"O",7=>"O"),
	array(2=>"O",5=>"O",8=>"O"),
	array(0=>"O",4=>"O",8=>"O"),
	array(2=>"O",4=>"O",6=>"O")
);

/* Checks for winning X arrangement and if present returns Player 1 Wins */
/* Prevents double reporting */

/* function xwinnercheck($GET, $win) {
	$GET = $_GET;
	foreach ($win as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			echo "Player 1 Wins";
		}
	}
}

function owinnercheck($GET, $win) {
	$GET = $_GET;
	foreach ($win as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			echo "Player 2 Wins";
		}
	}
} */


function winnercheck($GET, $xwin, $owin) {
	$winner = "";
	$GET = $_GET;
	foreach ($xwin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			if ($winner == "") {
				$winner = "Player 1 Wins";
			}
		}
	}
	foreach ($owin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			if ($winner == "") {
				$winner = "Player 2 Wins";
			}
		}
	}
	return $winner;
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
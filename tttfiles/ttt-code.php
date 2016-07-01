<?php

$player1 = "X";
$player2 = "O";

/* ------ List of box links for Player 1 and Player 2 ------ */

$xsquare1 = $player1 . "--------";
$xsquare2 = "-" . $player1 . "-------";
$xsquare3 = "--" . $player1 . "------";
$xsquare4 = "---" . $player1 . "-----";
$xsquare5 = "----" . $player1 . "----";
$xsquare6 = "-----" . $player1 . "---";
$xsquare7 = "------" . $player1 . "--";
$xsquare8 = "-------" . $player1 . "-";
$xsquare9 = "--------" . $player1;

$osquare1 = $player2 . "--------";
$osquare2 = "-" . $player2 . "-------";
$osquare3 = "--" . $player2 . "------";
$osquare4 = "---" . $player2 . "-----";
$osquare5 = "----" . $player2 . "----";
$osquare6 = "-----" . $player2 . "---";
$osquare7 = "------" . $player2 . "--";
$osquare8 = "-------" . $player2 . "-";
$osquare9 = "--------" . $player2;


/* ---- Takes the current board layout query and the new board layout query and merges them ---- */

function queryreplace($first,$second) {
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

$boardarrangement = "---------";
$boardarrangementnew = queryreplace($boardarrangement,$_GET["board"]);
$playermove = $_GET["board"];


?>
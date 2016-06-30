<?php

/* Sets the board equal to 9 digit parameter */
$board = $_GET["board"];
$board = str_split($board);


/*----------------------------------------*/

$player1 = "X";
$player2 = "O";


$xsquare1 = "$player1        ";
$xsquare2 = " $player1       ";
$xsquare3 = "  $player1      ";
$xsquare4 = "   $player1     ";
$xsquare5 = "    $player1    ";
$xsquare6 = "     $player1   ";
$xsquare7 = "      $player1  ";
$xsquare8 = "       $player1 ";
$xsquare9 = "        $player1";

$osquare1 = "$player2        ";
$osquare2 = " $player2       ";
$osquare3 = "  $player2      ";
$osquare4 = "   $player2     ";
$osquare5 = "    $player2    ";
$osquare6 = "     $player2   ";
$osquare7 = "      $player2  ";
$osquare8 = "       $player2 ";
$osquare9 = "        $player2";


$firstmove = "         ";


function queryreplace($first,$second) {
	foreach ($first as $firstkey => $boardarrange) {
		if ($first[$firstkey] == " " && $second[$firstkey] == "X") {
			$first[$firstkey] = $second[$firstkey];
		}
	}
	return $first;
}

/* $secondmove[] = array_diff($firstmove, $secondmove);

foreach ($secondmove as $square => $boardarrangement) {
	
} */






?>
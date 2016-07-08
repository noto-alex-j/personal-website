<?php

$game = $_GET;





// Array ( [mode] => single [0] => - [1] => - [2] => - [3] => - [4] => - [5] => - [6] => - [7] => - [8] => - [player] => X [turn] => 1 [score1] => 0 [score2] => 0 )


/* ------------------------------------ Board Logic -------------------------------------------- */

/* -------------------- Turn Switch ----------------------- */

if ($game[turn] % 2 == 0) {
	$game[player] = "O";
}
else {
	$game[player] = "X";
}

/* ------ Places player marker in each possible square ----- */

function moveplacer ($game) {
	$moveset = array();
	foreach ($game as $key => $value) {
		$move = $game;
		if (is_int($key)) {
			$move[$key] = $move["player"];
			array_push($moveset,$move);
		}
	}
	return $moveset;
}

$moveset = moveplacer($game);

/* ------- Changes player from X to O on each turn ------ */

function playerchanger($moveset) {
	$moveset2 = array();
	foreach($moveset as $move) {
		if($move["player"] == "X") {
			$move["player"] = "O";
		} 
		elseif($move["player"] == "O") {
			$move["player"] = "X";
		}
		array_push($moveset2,$move);
	}
	return $moveset2;
}

$playerchangedmoveset = playerchanger($moveset);

/* -------- Increases turn counter on each turn -------- */

function turnchanger($playerchangedmoveset) {
	$moveset3 = array();
	foreach($playerchangedmoveset as $move) {
		$move["turn"] += 1;
		array_push($moveset3,$move);
	}
	return $moveset3;
}


$playerturnchangedmoveset = (turnchanger($playerchangedmoveset));


print_r($game);

/* ------------------------------------ Winner Check -------------------------------------------- */

/* ------------ Determines winning board arrangement -------------- */

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

/* --- Compares current board arrangement to each winning arrangement-- */

function winnercheck($GET, $xwin, $owin) {
	$GET = $_GET;
	$winner = "";
	foreach ($xwin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			if ($winner === "") {
				$winner = "Player 1 Wins";
			}
		}
	}
	foreach ($owin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			if ($winner === "") {
				$winner = "Player 2 Wins";
			}
		}
	}
	return $winner;
}



/* ------------------------------------ Computer Logic -------------------------------------------- */

?>



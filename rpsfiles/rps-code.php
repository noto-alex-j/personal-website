<?php

$playerchoice = $_GET["weapon"];
$computerchoice = computerchoice();

/* ---------------Determines computer random choice------------- */

function computerchoice() {
	$computerchoice = rand(1,3);
	if ($computerchoice == 1) {
		$computerchoice = "rock";
	}
	elseif ($computerchoice == 2) {
		$computerchoice = "paper";
	}
	else {
		$computerchoice = "scissors";
	}
	return $computerchoice;
}

/* ----Determines result of player choice vs computer choice---- */

function result($player,$computer) {
	if ($player == "rock") {
		if ($computer == "rock") {
			return "tie";
		}
		elseif ($computer == "paper") {
			return "lose";
		}
		else {
			return "win";
		}
	}
	elseif ($player == "paper") {
		if ($computer == "rock") {
			return "win";
		}
		elseif ($computer == "paper") {
			return "tie";
		}
		else {
			return "lose";
		}
	}
	elseif ($player == "scissors") {
		if ($computer == "rock") {
			return "lose";
		}
		elseif ($computer == "paper") {
			return "win";
		}
		else {
			return "tie";
		}
	}
}

/* ----Determines picture that is shown for player and computer choices---- */

function picturechoice ($choice) {
	if ($choice == "rock") {
		return '<img src= "../images/rockhand.png">';
	}
	elseif ($choice == "paper") {
		return '<img src= "../images/paperhand.png">';
	}
	else {
		return '<img src= "../images/scissorshand.png">';
	}
}

?>
<?php

$playerchoice = $_GET["weapon"];
$computerchoice = computerchoice();

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

function result($playerchoice,$computerchoice) {
	if ($playerchoice == "rock") {
		if ($computerchoice == "rock") {
			return "tie";
		}
		elseif ($computerchoice == "paper") {
			return "lose";
		}
		else {
			return "win";
		}
	}
	elseif ($playerchoice == "paper") {
		if ($computerchoice == "rock") {
			return "win";
		}
		elseif ($computerchoice == "paper") {
			return "tie";
		}
		else {
			return "lose";
		}
	}
	elseif ($playerchoice == "scissors") {
		if ($computerchoice == "rock") {
			return "lose";
		}
		elseif ($computerchoice == "paper") {
			return "win";
		}
		else {
			return "tie";
		}
	}
}

?>
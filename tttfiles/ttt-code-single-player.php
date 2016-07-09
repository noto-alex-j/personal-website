<?php

$game = $_GET;

$startarray = array("mode"=>"single",0=>"-",1=>"-",2=>"-",3=>"-",4=>"-",5=>"-",6=>"-",7=>"-",8=>"-","computer"=>"","user"=>"","turn"=>1,"score1"=>0,"score2"=>0);

$startarray["computer"] = "X";
$startarray["user"] = "O";

$start = http_build_query($startarray);

// Array ( [mode] => single [0] => - [1] => - [2] => - [3] => - [4] => - [5] => - [6] => - [7] => - [8] => - [computer] => X [user] => O [turn] => 1 [score1] => 0 [score2] => 0 )


/* ------------------------------------ Board Logic -------------------------------------------- */


/* ------ Places player marker in each possible square ----- */

function usermoveplacer ($game) {
	$moveset = array();
	foreach ($game as $key => $value) {
		$move = $game;
		if (is_int($key) && $value == "-") {
			$move[$key] = $move["user"];
			array_push($moveset,$move);
		}
		elseif (is_int($key)){
			array_push($moveset,$move);
		}
	}
	return $moveset;
}

$usermoves = usermoveplacer($game);


/* -------- Increases turn counter on each turn -------- */

function userturnchanger($usermoves) {
	$moveset3 = array();
	foreach($usermoves as $move) {
		$move["turn"] += 1;
		array_push($moveset3,$move);
	}
	return $moveset3;
}


$usermoveset = (userturnchanger($usermoves));


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

function winnercheck($game, $xwin, $owin) {
	foreach ($xwin as $winningarray) {
		if (array_intersect_assoc($game, $winningarray) == $winningarray) {
				return "X";
		}
	}
	foreach ($owin as $winningarray) {
		if (array_intersect_assoc($game, $winningarray) == $winningarray) {
				return "O";
		}
	}
}



/* ------------------------------------ Computer Logic -------------------------------------------- */


function computermoveplacer ($game) {
	$moveset = array();
	foreach ($game as $key => $value) {
		$move = $game;
		if ($game["computer"]=="O" && $game["turn"]==1){
			array_push($moveset,$game);
		}
		else{
			if (is_int($key) && $value == "-") {
				$move[$key] = $move["computer"];
				array_push($moveset,$move);
			}
			elseif (is_int($key)){
				array_push($moveset,$move);
			}
		}
	}
	return $moveset;
}

$computermoves = computermoveplacer($game);


/* -------- Increases turn counter on each turn -------- */

function computerturnchanger($computermoves) {
	$moveset3 = array();
	foreach($computermoves as $move) {
		$move["turn"] += 1;
		array_push($moveset3,$move);
	}
	return $moveset3;
}


$computermoveset = (computerturnchanger($computermoves));





/* ------------------- Winning/Losing Computer Moves -------------------- */

function winningcomputermove($computermoveset,$xwin,$owin,$game){
	foreach($computermoveset as $key => $move) {
		if(winnercheck($move,$xwin,$owin) == $game["computer"]){
			return $move;
		}
	}
}

$winningcomputermove = winningcomputermove($computermoveset,$xwin,$owin,$game);


function losingcomputerblock($usermoveset,$xwin,$owin,$game){
	foreach($usermoveset as $key => $move) {
		if(winnercheck($move,$xwin,$owin) == $game["user"]) {
			return $key;
		}
	}
}

$losingcomputerblock = losingcomputerblock($usermoveset,$xwin,$owin,$game);

/* ----------------------Chooses random open square--------------------------- */

function randomchoice($game){
	$randomsquare=array();
		foreach($game as $key => $box){
			if($box == "-"){
				array_push($randomsquare, $key);
			}
		}
	$randomkey = array_rand($randomsquare);
	return $randomsquare[$randomkey];
}

$randomchoice = randomchoice($game);

/* ----------------------------- Computer Move Logic --------------------------------- */


function computermove($winningcomputermove,$losingcomputerblock,$game,$computermoveset,$randomchoice){
	if($winningcomputermove != ""){
		return $winningcomputermove;
	}
	elseif($losingcomputerblock != ""){
		return $computermoveset[$losingcomputerblock];
	}
	elseif($game[4] == "-"){
		return $computermoveset[4];
	}
	else{
		return $computermoveset[$randomchoice];
	}
}


$computermove = (computermove($winningcomputermove,$losingcomputerblock,$game,$computermoveset,$randomchoice));



function arraymerger($computermove,$usermove,$game) {
	foreach ($computermove as $key => $move) {
		if ($computermove[$key] == "-" && $usermove[$key] == $game["user"]) {
			$computermove[$key] = $usermove[$key];
		}
	}
	return $computermove;
}


function linkgenerator($computermove,$usermoveset,$game){
	$links = array();
	foreach($usermoveset as $usermove) {
		array_push($links, arraymerger($computermove,$usermove,$game));
	}
	return $links;
}

$linkslist = linkgenerator($computermove,$usermoveset,$game);



?>



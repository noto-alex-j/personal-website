<?php

$playerx = 1;
$playero = 2;

$game = array(0=>"",1=>"",2=>"",3=>"",4=>"",5=>"",6=>"",7=>"",8=>"",player=>"",turn=>"",score1=>"",score2=>"");

/* Decided that it's easier to just include the & in the first query */



/* ------ Switches player turn based on last element in query param ------ */






/* Checks for winning X arrangement and if present returns Player 1 Wins */
/* Still double reporting */

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


/* ---------------------------------- Computer Player Logic ------------------------------------- */


$currentboard = $_GET;

	
function computermovelinkendarrays($links,$GET,$xwin,$owin){
	$GET = http_build_query($GET);
	$allPossibleLinks = array();
	foreach ($links as $key => $linkend) {
		$concat = $GET . $linkend;
		parse_str($concat, $possiblelink);
		array_push($allPossibleLinks, $possiblelink);
	}
	return $allPossibleLinks;
}

function winningComputerMove($links,$GET,$xwin,$owin) {
	$cpulinkends = computermovelinkendarrays($links,$GET,$xwin,$owin);
	foreach($cpulinkends as $key => $end) {
		if (winnercheck($end,$xwin,$owin) == "Player 1 Wins") {
			return http_build_query($end);
		}
	}
}

function computermove ($links,$GET,$xwin,$owin) {
	if (winningComputerMove($links,$GET,$xwin,$owin)){
		return winningComputerMove($links,$GET,$xwin,$owin);
	}
	
}

$computerlinkend = computermove($links2,$_GET,$xwin,$owin);

?>







<?php /*


/* -------------------------------- Unused Code --------------------------------------- 

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



 /* ---- Takes the current board layout query and the new board layout query and merges them ---- 

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



 ----Takes $_GET and adds appropriate query ending, to be added to end of string to make link----

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

/* Player 1 and 2 arrays fed into link appender to generate appropriate link endings 
/* The generated link endings are then affixed to the existing $_GET string and become new hrefs

$player1 = array(0,1,2,3,4,5,6,7,8);
$player2 = array(0,1,2,3,4,5,6,7,8);

$links1 = linkappender1($player1);
$links2 = linkappender2($player2); 


 /* function xwinnercheck($GET, $xwin) {
	$GET = $_GET;
	foreach ($xwin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			echo "Player 1 Wins";
		}
	}
}

function owinnercheck($GET, $owin) {
	$GET = $_GET;
	foreach ($owin as $winningarray) {
		if (array_intersect_assoc($GET, $winningarray) == $winningarray) {
			echo "Player 2 Wins";
		}
	}
}





<a href= "  "><div class= "square"><?php echo $_GET[0]; ?></div></a>

<?php 

if(($_GET[0]=='X')||($_GET[0]=='O')){
} 

else { 
	echo "?".$_SERVER['QUERY_STRING']; 
	echo $links[0]; 
	echo $computerlinkend;
}

?>



? &0=X&4=O &0=X &4=X








function cornerComputerMove ($links,$GET,$xwin,$owin) {
	$cpulinkends = computermovelinkendarrays($links,$GET,$xwin,$owin);
	foreach($cpulinkends as $key => $end) {
		if ($key == 0 || $key == 2 || $key == 6 || $key == 8) {
			if (!array_key_exists($key, $GET)) {
				print http_build_query($end) . "\n";
			}
		}
	}
}






*/ ?>

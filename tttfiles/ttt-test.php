<?php include ("ttt-code.php"); ?>

<?php
echo "Testing result of board configuration $GET = (0=>"X",1=>"O",3=>"X",4=>"O",6=>"X"):"
$GET = array(0=>"X",1=>"O",3=>"X",4=>"O",6=>"X");
if winnercheck($GET, $xwin, $owin) == "Player 1 Wins") {
	echo "Success!";
}
else {
	echo "Failed.";
}
?>

<?php
echo "Testing result of board configuration $GET = (0=>"X",2=>"O",3=>"X",4=>"O",6=>"O"):"
$GET = array(0=>"X",2=>"O",3=>"X",4=>"O",6=>"O");
if winnercheck($GET, $xwin, $owin) == "Player 2 Wins") {
	echo "Success!";
}
else {
	echo "Failed.";
}
?>

<?php
echo "Testing result of board configuration $GET = (1=>"O",4=>"X",7=>"X"):"
$GET = array(1=>"O",4=>"X",7=>"X");
if winnercheck($GET, $xwin, $owin) == "") {
	echo "Success!";
}
else {
	echo "Failed.";
}
?>
<?php include ("ttt-code-dual-player.php"); ?>

<?php
echo nl2br ('Testing result of board configuration $GET = (0=>"X",1=>"O",3=>"X",4=>"O",6=>"X"):');
$_GET = array(0=>"X",1=>"O",3=>"X",4=>"O",6=>"X");
if (winnercheck($_GET, $xwin, $owin) == "Player 1 Wins") {
	echo nl2br ("\n Success! \n");
}
else {
	echo "Failed.";
}
?>

<?php
echo 'Testing result of board configuration $GET = (0=>"X",2=>"O",3=>"X",4=>"O",6=>"O"):';
$_GET = array(0=>"X",2=>"O",3=>"X",4=>"O",6=>"O");
if (winnercheck($_GET, $xwin, $owin) == "Player 2 Wins") {
	echo nl2br ("\n Success! \n");
}
else {
	echo "Failed.";
}
?>

<?php
echo 'Testing result of board configuration $GET = (1=>"O",4=>"X",7=>"X"):';
$_GET = array(1=>"O",4=>"X",7=>"X");
if (winnercheck($_GET, $xwin, $owin) == "") {
	echo nl2br ("\n Success!");
}
else {
	echo "Failed.";
}
?>
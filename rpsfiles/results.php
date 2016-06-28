<?php include ("rps-code.php"); ?>

<div id= "results">

<div id= "playerchoice">
<h2>You chose:</h2>
<br>
<?php
if ($playerchoice == "rock") {
	echo '<img src= "../images/rockhand.png">';
}
elseif ($playerchoice == "paper") {
	echo '<img src= "../images/paperhand.png">';
}
else {
	echo '<img src= "../images/scissorshand.png">';
}
?>
</div>

<?php
if (result($playerchoice,$computerchoice) == "win") {
	echo '<img src= "../images/win.png">';
}
elseif (result($playerchoice,$computerchoice) == "lose") {
	echo '<img src= "../images/lose.png">';
}
else {
	echo '<img src= "../images/tie.png">';
}
?>

<div id= "computerchoice">
<h2>Computer chose:</h2>
<br>
<?php
if ($computerchoice == "rock") {
	echo '<img src= "../images/rockhand.png">';
}
elseif ($computerchoice == "paper") {
	echo '<img src= "../images/paperhand.png">';
}
else {
	echo '<img src= "../images/scissorshand.png">';
}
?>
</div>

</div>
<?php include ("rps-code.php"); ?>

<div id= "results">

<!-- -------------Player Choice Container--------------- -->

<div id= "playerchoice">
<h2>You chose:</h2>
<br>
<?php
echo picturechoice($playerchoice);
?>
</div>

<!-- -------------Results Image Code--------------- -->

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

<!-- -------------Computer Choice Container--------------- -->

<div id= "computerchoice">
<h2>Computer chose:</h2>
<br>
<?php
echo picturechoice($computerchoice);
?>
</div>

</div>
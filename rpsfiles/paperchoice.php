<div id= "results">

<div id= "playerchoice">

<h2>You chose:</h2>
<br>
<img src= "../images/paperhand.png">

</div>

<?php
$computerChoice = rand(1,3);
if ($computerChoice == 1) {
	echo '<img src= "../images/win.png">';
}
elseif ($computerChoice == 2) {
	echo '<img src= "../images/tie.png">';
}
else {
	echo '<img src= "../images/lose.png">';
}
?>

<div id= "computerchoice">

<h2>Computer chose:</h2>
<br>
<?php
if ($computerChoice == 1) {
	echo '<img src= "../images/rockhand.png">';
}
elseif ($computerChoice == 2) {
	echo '<img src= "../images/paperhand.png">';
}
else {
	echo '<img src= "../images/scissorshand.png">';
}
?>

</div>

</div>
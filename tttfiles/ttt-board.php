<?php include "ttt-code.php"; ?>

<div class= "playerturn"><?php
if (end($_GET) == "X") {
	echo "Player 2's Turn";
}
elseif (end($_GET) == "O") {
	echo "Player 1's Turn";
}
else {
	echo "Player 1's Turn";
}
?></div>

<div class= "tttbox">

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[0]; ?>"><div class= "square"><?php echo $_GET[0]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[1]; ?>"><div class= "square"><?php echo $_GET[1]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[2]; ?>"><div class= "square"><?php echo $_GET[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[3]; ?>"><div class= "square"><?php echo $_GET[3]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[4]; ?>"><div class= "square"><?php echo $_GET[4]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[5]; ?>"><div class= "square"><?php echo $_GET[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[6]; ?>"><div class= "square"><?php echo $_GET[6]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[7]; ?>"><div class= "square"><?php echo $_GET[7]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links[8]; ?>"><div class= "square"><?php echo $_GET[8]; ?></div></a>
	</div>


</div>


<div class= "resetbutton"><a href="Tic%20Tac%20Toe.php">Reset</a></div>




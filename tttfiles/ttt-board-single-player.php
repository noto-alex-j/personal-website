<?php include "ttt-code-single-player.php"; ?>

<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single&0=-&1=-&2=-&3=-&4=-&5=-&6=-&7=-&8=-&player=X&turn=1&score1=0&score2=0" class="switcher__single">One Player</a><a href="?mode=double" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[0]);?>"><div class= "square"><?php echo $game[0]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[1]);?>"><div class= "square"><?php echo $game[1]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[2]);?>"><div class= "square"><?php echo $game[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[3]);?>"><div class= "square"><?php echo $game[3]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[4]);?>"><div class= "square"><?php echo $game[4]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[5]);?>"><div class= "square"><?php echo $game[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[6]);?>"><div class= "square"><?php echo $game[6]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[7]);?>"><div class= "square"><?php echo $game[7]; ?></div></a>
		<a href= "?<?php echo http_build_query($playerturnchangedmoveset[8]);?>"><div class= "square"><?php echo $game[8]; ?></div></a>
	</div>


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

<div class="winner"></div>

<div class= "resetbutton"><a href="Tic%20Tac%20Toe.php">Reset</a></div>

</div>



<?php include "ttt-code-single-player.php"; ?>

<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single" class="switcher__single">One Player</a><a href="?mode=double" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "?<?php if(($_GET[0]=='X')||($_GET[0]=='O')){}else{echo "X--------O200";}?>"><div class= "square"><?php echo $game[0]; ?></div></a>
		<a href= "?<?php if(($_GET[1]=='X')||($_GET[1]=='O')){}else{echo "-X-------O200";}?>"><div class= "square"><?php echo $game[1]; ?></div></a>
		<a href= "?<?php if(($_GET[2]=='X')||($_GET[2]=='O')){}else{echo "--X------O200";}?>"><div class= "square"><?php echo $game[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if(($_GET[3]=='X')||($_GET[3]=='O')){}else{}?>"><div class= "square"><?php echo $game[3]; ?></div></a>
		<a href= "<?php if(($_GET[4]=='X')||($_GET[4]=='O')){}else{}?>"><div class= "square"><?php echo $game[4]; ?></div></a>
		<a href= "<?php if(($_GET[5]=='X')||($_GET[5]=='O')){}else{}?>"><div class= "square"><?php echo $game[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if(($_GET[6]=='X')||($_GET[6]=='O')){}else{}?>"><div class= "square"><?php echo $game[6]; ?></div></a>
		<a href= "<?php if(($_GET[7]=='X')||($_GET[7]=='O')){}else{}?>"><div class= "square"><?php echo $game[7]; ?></div></a>
		<a href= "<?php if(($_GET[8]=='X')||($_GET[8]=='O')){}else{}?>"><div class= "square"><?php echo $game[8]; ?></div></a>
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



<?php include "ttt-code-single-player.php"; ?>

<?php print_r($game); ?>
<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single" class="switcher__single">One Player</a><a href="?mode=double&0=-&1=-&2=-&3=-&4=-&5=-&6=-&7=-&8=-&player=X&turn=1&score1=0&score2=0" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "<?php if($game[0] == "-") {echo "?" . http_build_query($linkslist[0]);}?>"><div class= "square"><?php echo $game[0]; ?></div></a>
		<a href= "<?php if($game[1] == "-") {echo "?" . http_build_query($linkslist[1]);}?>"><div class= "square"><?php echo $game[1]; ?></div></a>
		<a href= "<?php if($game[2] == "-") {echo "?" . http_build_query($linkslist[2]);}?>"><div class= "square"><?php echo $game[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($game[3] == "-") {echo "?" . http_build_query($linkslist[3]);}?>"><div class= "square"><?php echo $game[3]; ?></div></a>
		<a href= "<?php if($game[4] == "-") {echo "?" . http_build_query($linkslist[4]);}?>"><div class= "square"><?php echo $game[4]; ?></div></a>
		<a href= "<?php if($game[5] == "-") {echo "?" . http_build_query($linkslist[5]);}?>"><div class= "square"><?php echo $game[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($game[6] == "-") {echo "?" . http_build_query($linkslist[6]);}?>"><div class= "square"><?php echo $game[6]; ?></div></a>
		<a href= "<?php if($game[7] == "-") {echo "?" . http_build_query($linkslist[7]);}?>"><div class= "square"><?php echo $game[7]; ?></div></a>
		<a href= "<?php if($game[8] == "-") {echo "?" . http_build_query($linkslist[8]);}?>"><div class= "square"><?php echo $game[8]; ?></div></a>
	</div>
<div><a href="?<?php echo $start;?>">Start</a></div>

<div class= "playerturn"><?php
if ($game["player"] == "X") {
	echo "Player 1's Turn";
}
elseif ($game["player"] == "O") {
	echo "Player 2's Turn";
}
else {
	echo "Player 1's Turn";
}
?></div>

<div class="winner"><?php if ($game["turn"]<10){echo winnercheck($game,$xwin,$owin);}else{echo "Draw";} ?></div>

<div class= "resetbutton"><a href="Tic%20Tac%20Toe.php?mode=single">Reset</a></div>

</div>





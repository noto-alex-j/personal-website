<?php include "ttt-code-single-player.php"; ?>

<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single&0=-&1=-&2=-&3=-&4=-&5=-&6=-&7=-&8=-&computer=X&user=O&turn=1&score1=0&score2=0" class="switcher__single">One Player</a><a href="?mode=double&0=-&1=-&2=-&3=-&4=-&5=-&6=-&7=-&8=-&player=X&turn=1&score1=0&score2=0" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "<?php if($computermove[0] == "-") {echo "?" . http_build_query($usermoveset[0]);}?>"><div class= "square"><?php echo $computermove[0]; ?></div></a>
		<a href= "<?php if($computermove[1] == "-") {echo "?" . http_build_query($usermoveset[1]);}?>"><div class= "square"><?php echo $computermove[1]; ?></div></a>
		<a href= "<?php if($computermove[2] == "-") {echo "?" . http_build_query($usermoveset[2]);}?>"><div class= "square"><?php echo $computermove[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($computermove[3] == "-") {echo "?" . http_build_query($usermoveset[3]);}?>"><div class= "square"><?php echo $computermove[3]; ?></div></a>
		<a href= "<?php if($computermove[4] == "-") {echo "?" . http_build_query($usermoveset[4]);}?>"><div class= "square"><?php echo $computermove[4]; ?></div></a>
		<a href= "<?php if($computermove[5] == "-") {echo "?" . http_build_query($usermoveset[5]);}?>"><div class= "square"><?php echo $computermove[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($computermove[6] == "-") {echo "?" . http_build_query($usermoveset[6]);}?>"><div class= "square"><?php echo $computermove[6]; ?></div></a>
		<a href= "<?php if($computermove[7] == "-") {echo "?" . http_build_query($usermoveset[7]);}?>"><div class= "square"><?php echo $computermove[7]; ?></div></a>
		<a href= "<?php if($computermove[8] == "-") {echo "?" . http_build_query($usermoveset[8]);}?>"><div class= "square"><?php echo $computermove[8]; ?></div></a>
	</div>


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

<div class= "resetbutton"><a href="Tic%20Tac%20Toe.php?mode=single&0=-&1=-&2=-&3=-&4=-&5=-&6=-&7=-&8=-&computer=X&user=O&turn=1&score1=0&score2=0">Reset</a></div>

</div>

<?php print_r($game); ?>



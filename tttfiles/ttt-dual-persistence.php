<?php include "ttt-dual-persistence-code.php"; ?>

<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single" class="switcher__single">One Player</a><a href="?mode=double" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "<?php if($game[0] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[0]);}?>"><div class= "square"><?php echo $game[0]; ?></div></a>
		<a href= "<?php if($game[1] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[1]);}?>"><div class= "square"><?php echo $game[1]; ?></div></a>
		<a href= "<?php if($game[2] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[2]);}?>"><div class= "square"><?php echo $game[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($game[3] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[3]);}?>"><div class= "square"><?php echo $game[3]; ?></div></a>
		<a href= "<?php if($game[4] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[4]);}?>"><div class= "square"><?php echo $game[4]; ?></div></a>
		<a href= "<?php if($game[5] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[5]);}?>"><div class= "square"><?php echo $game[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($game[6] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[6]);}?>"><div class= "square"><?php echo $game[6]; ?></div></a>
		<a href= "<?php if($game[7] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[7]);}?>"><div class= "square"><?php echo $game[7]; ?></div></a>
		<a href= "<?php if($game[8] == "-") {echo "?" . http_build_query($playerturnchangedmoveset[8]);}?>"><div class= "square"><?php echo $game[8]; ?></div></a>
	</div>

	<div class= "scorekeeper">X Score: <?php echo $displayscorex; ?> | O Score: <?php echo $displayscoreo; ?> | <a class= "scorereset" href= "http://localhost:8888/games/Tic%20Tac%20Toe.php?mode=double">Reset</a></div>
	
	<div class= "playerturn"><?php
		if ($game["turn"] >= 1){
			if ($game["player"] == "X") {
				echo "Player X's Turn";
			}
			elseif ($game["player"] == "O") {
				echo "Player O's Turn";
			}
			else {
				echo "Player X's Turn";
			}
		}
		else {echo "Click start to play with a friend";}
	?></div>

	<div class="winner"><?php if ($game["turn"]<10){echo winnercheck($game,$xwin,$owin);}else{echo "Draw";} ?></div>

	<div class= "resetbutton"><a href="?<?php echo $start;?>">Start</a></div>

</div>



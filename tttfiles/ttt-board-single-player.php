<?php include "ttt-code-single-player.php"; ?>

<div class= "tttbox">

	<div class="boxtitle">Tic Tac Toe</div>

	<div class="switcher"><a href="?mode=single" class="switcher__single">One Player</a><a href="?mode=double" class= "switcher__double">Two Player</a></div>

	<div class= "row">
		<a href= "<?php if($computermove[0] == "-") {echo "?" . http_build_query($linkslist[0]);}?>"><div class= "square"><?php echo $computermove[0]; ?></div></a>
		<a href= "<?php if($computermove[1] == "-") {echo "?" . http_build_query($linkslist[1]);}?>"><div class= "square"><?php echo $computermove[1]; ?></div></a>
		<a href= "<?php if($computermove[2] == "-") {echo "?" . http_build_query($linkslist[2]);}?>"><div class= "square"><?php echo $computermove[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($computermove[3] == "-") {echo "?" . http_build_query($linkslist[3]);}?>"><div class= "square"><?php echo $computermove[3]; ?></div></a>
		<a href= "<?php if($computermove[4] == "-") {echo "?" . http_build_query($linkslist[4]);}?>"><div class= "square"><?php echo $computermove[4]; ?></div></a>
		<a href= "<?php if($computermove[5] == "-") {echo "?" . http_build_query($linkslist[5]);}?>"><div class= "square"><?php echo $computermove[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if($computermove[6] == "-") {echo "?" . http_build_query($linkslist[6]);}?>"><div class= "square"><?php echo $computermove[6]; ?></div></a>
		<a href= "<?php if($computermove[7] == "-") {echo "?" . http_build_query($linkslist[7]);}?>"><div class= "square"><?php echo $computermove[7]; ?></div></a>
		<a href= "<?php if($computermove[8] == "-") {echo "?" . http_build_query($linkslist[8]);}?>"><div class= "square"><?php echo $computermove[8]; ?></div></a>
	</div>

	<div class= "userpiece"><?php if($game["turn"] >= 1){echo "You are " . $game["user"];}else{echo "Click start to play against the computer";}?></div>
	
	<div class="winner">
	<?php 
	if(winnercheck($computermove,$xwin,$owin)!=""){
		echo "The winner is " . winnercheck($computermove,$xwin,$owin) . "!";
	}
	elseif($computermove[0]!="-"&&$computermove[1]!="-"&&$computermove[2]!="-"&&$computermove[3]!="-"&&$computermove[4]!="-"&&$computermove[5]!="-"&&$computermove[6]!="-"&&$computermove[7]!="-"&&$computermove[8]!="-"&&$game["turn"] > 1){
		echo "Draw";
	}
	?>
	</div>

<!-- 	<div class="score">X Score: <?php echo $computermove["xscore"];?> O Score: <?php echo $computermove["oscore"];?></div>
 -->	
	<div class= "resetbutton"><a href="?<?php echo $start;?>">Start</a></div>

</div>





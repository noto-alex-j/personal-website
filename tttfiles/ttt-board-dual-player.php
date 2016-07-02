<?php include "ttt-code-dual-player.php"; ?>

<div class= "tttbox">

	<div class= "row">
		<a href= "<?php if(($_GET[0]=='X')||($_GET[0]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[0];}; ?>"><div class= "square"><?php echo $_GET[0]; ?></div></a>
		<a href= "<?php if(($_GET[1]=='X')||($_GET[1]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[1];}; ?>"><div class= "square"><?php echo $_GET[1]; ?></div></a>
		<a href= "<?php if(($_GET[2]=='X')||($_GET[2]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[2];}; ?>"><div class= "square"><?php echo $_GET[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if(($_GET[3]=='X')||($_GET[3]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[3];}; ?>"><div class= "square"><?php echo $_GET[3]; ?></div></a>
		<a href= "<?php if(($_GET[4]=='X')||($_GET[4]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[4];}; ?>"><div class= "square"><?php echo $_GET[4]; ?></div></a>
		<a href= "<?php if(($_GET[5]=='X')||($_GET[5]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[5];}; ?>"><div class= "square"><?php echo $_GET[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "<?php if(($_GET[6]=='X')||($_GET[6]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[6];}; ?>"><div class= "square"><?php echo $_GET[6]; ?></div></a>
		<a href= "<?php if(($_GET[7]=='X')||($_GET[7]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[7];}; ?>"><div class= "square"><?php echo $_GET[7]; ?></div></a>
		<a href= "<?php if(($_GET[8]=='X')||($_GET[8]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $links[8];}; ?>"><div class= "square"><?php echo $_GET[8]; ?></div></a>
	</div>


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

<div class="winner"><?php echo winnercheck($_GET,$xwin,$owin); ?></div>

<div class= "resetbutton"><a href="Tic%20Tac%20Toe.php">Reset</a></div>




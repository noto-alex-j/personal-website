<?php include "ttt-code.php"; ?>

<div class= "tttbox">

	<div class= "row">
		<a href= "?board=<?php echo $xsquare1;?>"><div class= "square"><?php echo $board[0]; ?></div></a>
		<a href= "?board=<?php echo $xsquare2;?>"><div class= "square"><?php echo $board[1]; ?></div></a>
		<a href= "?board=<?php echo $xsquare3;?>"><div class= "square"><?php echo $board[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?board=<?php echo $xsquare4;?>"><div class= "square"><?php echo $board[3]; ?></div></a>
		<a href= "?board=<?php echo $xsquare5;?>"><div class= "square"><?php echo $board[4]; ?></div></a>
		<a href= "?board=<?php echo $xsquare6;?>"><div class= "square"><?php echo $board[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?board=<?php echo $xsquare7;?>"><div class= "square"><?php echo $board[6]; ?></div></a>
		<a href= "?board=<?php echo $xsquare8;?>"><div class= "square"><?php echo $board[7]; ?></div></a>
		<a href= "?board=<?php echo $xsquare9;?>"><div class= "square"><?php echo $board[8]; ?></div></a>
	</div>


</div>

<?php echo queryreplace($firstmove,$secondmove); ?>




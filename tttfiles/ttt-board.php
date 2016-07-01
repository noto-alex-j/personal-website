<?php include "ttt-code.php"; ?>

<div class= "tttbox">

	<div class= "row">
		<a href= "?board=<?php echo $xsquare1;?>"><div class= "square"><?php echo $boardarrangementnew[0]; ?></div></a>
		<a href= "?board=<?php echo $xsquare2;?>"><div class= "square"><?php echo $boardarrangementnew[1]; ?></div></a>
		<a href= "?board=<?php echo $xsquare3;?>"><div class= "square"><?php echo $boardarrangementnew[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?board=<?php echo $xsquare4;?>"><div class= "square"><?php echo $boardarrangementnew[3]; ?></div></a>
		<a href= "?board=<?php echo $xsquare5;?>"><div class= "square"><?php echo $boardarrangementnew[4]; ?></div></a>
		<a href= "?board=<?php echo $xsquare6;?>"><div class= "square"><?php echo $boardarrangementnew[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?board=<?php echo $xsquare7;?>"><div class= "square"><?php echo $boardarrangementnew[6]; ?></div></a>
		<a href= "?board=<?php echo $xsquare8;?>"><div class= "square"><?php echo $boardarrangementnew[7]; ?></div></a>
		<a href= "?board=<?php echo $xsquare9;?>"><div class= "square"><?php echo $boardarrangementnew[8]; ?></div></a>
	</div>


</div>


<a href="Tic%20Tac%20Toe.php">Reset</a>
<br>
<?php print_r($boardarrangement); ?>
<br>
<?php echo $_GET["board"]; ?>
<br>
<?php print_r($boardarrangementnew); ?>

<?php include "ttt-code.php"; ?>

<div class= "tttbox">

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[0]; ?>"><div class= "square"><?php echo $_GET[0]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[1]; ?>"><div class= "square"><?php echo $_GET[1]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[2]; ?>"><div class= "square"><?php echo $_GET[2]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[3]; ?>"><div class= "square"><?php echo $_GET[3]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[4]; ?>"><div class= "square"><?php echo $_GET[4]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[5]; ?>"><div class= "square"><?php echo $_GET[5]; ?></div></a>
	</div>

	<div class= "row">
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[6]; ?>"><div class= "square"><?php echo $_GET[6]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[7]; ?>"><div class= "square"><?php echo $_GET[7]; ?></div></a>
		<a href= "?<?php echo $_SERVER['QUERY_STRING']; ?><?php echo $links1[8]; ?>"><div class= "square"><?php echo $_GET[8]; ?></div></a>
	</div>


</div>


<a href="Tic%20Tac%20Toe.php">Reset</a>
<br>
<?php print_r($_GET); ?>
<br>
<?php echo implode($_GET); ?>
<br>
<?php print_r($links1); ?>
<br>
<?php print_r($links2); ?>
<br>
<br>
<?php echo $_SERVER['QUERY_STRING']; ?>


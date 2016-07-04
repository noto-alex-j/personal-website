<?php $title = "Tic Tac Toe" ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "games"; ?>

<?php include "../header.php"; ?>

<link type= "text/css"; rel= "stylesheet"; href= "../tttfiles/ttt.css">

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">
			
			<?php 
			if ($_GET["mode"] == "single") { include "../tttfiles/ttt-board-single-player.php"; }
			elseif ($_GET["mode"] == "double") {include "../tttfiles/ttt-board-dual-player.php"; }
			else {include "../tttfiles/ttt-board-single-player.php"; } 
			?>


		</div>

	</div>

<?php include "../navigation/navigation.php"; ?>

</body>

</html>
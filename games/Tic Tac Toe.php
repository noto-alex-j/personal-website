<?php $title = "Tic Tac Toe" ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "games"; ?>

<?php include "../header.php"; ?>

<link type= "text/css"; rel= "stylesheet"; href= "../tttfiles/ttt.css">

<body class= "body">

<div class= "supercontainer">

	<?php include("../navigation/navigation.php"); ?>

	<div class= "pagecontents">
			
			<?php 
			if ($_GET["mode"] == "single") { include "../tttfiles/ttt-board-single-player.php"; }
			elseif ($_GET["mode"] == "double") {include "../tttfiles/ttt-board-dual-player.php"; }
			else {include "../tttfiles/ttt-board-single-player.php"; } 
			?>


	</div>

</div>

</body>

</html>
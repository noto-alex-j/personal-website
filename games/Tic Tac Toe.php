<?php $title = "Tic Tac Toe" ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "games"; ?>

<?php include "../header.php"; ?>

<link type= "text/css"; rel= "stylesheet"; href= "../tttfiles/ttt.css">

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">

			<h1>Tic Tac Toe</h1>
			

			<?php include "../tttfiles/ttt-board-dual-player.php"; ?>


		</div>

	</div>

<?php include "../navigation/navigation.php"; ?>

</body>

</html>
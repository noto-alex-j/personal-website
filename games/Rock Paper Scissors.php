<?php $title = "Rock Paper Scissors" ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "games"; ?>

<?php include("../header.php"); ?>

<link type= "text/css"; rel= "stylesheet"; href= "../rpsfiles/rps.css">

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">

			<h1>Rock Paper Scissors</h1>
			<br>

			<?php
			if ($_GET["weapon"] == "") {
				include "../rpsfiles/rps-choose-weapon.php";
			}
			else {
				include "../rpsfiles/results.php";
			}
			?>
			
			<a href= "Rock%20Paper%20Scissors.php" id= "replaybutton">Replay</a>


		</div>

	</div>

<?php include("../navigation/navigation.php"); ?>

</body>

</html>
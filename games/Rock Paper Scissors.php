<?php $title = "Rock Paper Scissors" ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "games"; ?>

<?php include("../header.php"); ?>

<link type= "text/css"; rel= "stylesheet"; href= "../rpsfiles/rps.css">

<body class= "body">

<div class= "supercontainer">

	<?php include("../navigation/navigation.php"); ?>

	<div class= "pagecontents">

		<div class= "rpsboard">

			<h1 class="maintitle">Rock Paper Scissors</h1>
			<br>

			<?php
			if ($_GET["weapon"] == "") {
				include "../rpsfiles/rps-choose-weapon.php";
			}
			else {
				include "../rpsfiles/results.php";
			}
			?>
			
			<div class="replaybutton"><a href= "Rock%20Paper%20Scissors.php">Replay</a></div>

		</div>

	</div>

</div>

</body>

</html>
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
			if ($_GET["weapon"] == "rock") {
				include "../rpsfiles/results.php";
			}
			elseif ($_GET["weapon"] == "paper") {
				include "../rpsfiles/results.php";
			}
			elseif ($_GET["weapon"] == "scissors") {
				include "../rpsfiles/results.php";
			}
			else {	
				include "../rpsfiles/rps-choose-weapon.php";
			}
			?>
			
			<a href= "Rock%20Paper%20Scissors.php"><h3>Replay</h3></a>


		</div>

	</div>

<?php include("../navigation/navigation.php"); ?>

</body>

</html>
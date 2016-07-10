<?php $title = "Tic Tac Toe Progress"; ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "articles"; ?>

<?php include("../header.php"); ?>

<body class= "body">

<div class= "supercontainer">

	<?php include("../navigation/navigation.php"); ?>

	<div class= "pagecontents">

			<h3>Tic Tac Toe Progress</h3>

				<p>
					Before my studies at Omaha Code School even began, I expected the pacing to be ballistic. I did not, however, anticipate just how much my skills would develop in such a short time. I began with what amounted to a few short weeks of basic experience with a handful of programming languages and concepts. Within the second week of classes, I had already built a simple website, a Rock-Paper-Scissors game, and begun programming a computer opponent for a Tic-Tac-Toe game. While the game itself is fairly simple and straightforward, the development of an opponent has been anything but.
					<br>
					<br>
					The biggest difficulty I faced when approaching the Tic-Tac-Toe game was how to use my website’s URL, which is constantly changing, to store game information. This seems like a rudimentary way to store information, but it is a great way to learn how to use query string parameters. I focused mainly on the two-player mode as I was writing the first draft of my game. It was easier, and I hadn’t fully learned how to use query string parameters effectively yet. Thus, the first draft relied too heavily on the query string and not enough on actual code. I had succeeded in writing a working two-player mode, but the code was not at all usable in writing a single-player mode with a computer opponent.
					<br>
					<br>
					I began writing a single-player mode from scratch. But in the process, I inadvertently rewrote my two-player code both more efficiently and much more quickly than I had written the first draft. The new code was much more modular and successful than my original code, as it worked well for both modes. This alone is a testament to how effective the Omaha Code School curriculum is. It is encouraging to me that, with hard work, and not a little frustration, I can identify errors and inefficiencies in my code and correct and rewrite code more and more quickly. 
				</p>

	</div>

</div>

</body>
</html>
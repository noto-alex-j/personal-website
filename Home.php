<!DOCTYPE html>

<?php $title = "Home" ?>
<?php $dirfix = ""; ?>
<?php $prefix = ""; ?>

<html>

<?php if ($_GET["theme"] == "dark"){echo '<link type= "text/css"; rel= "stylesheet"; href= "/stylesheet alt.css">';} elseif ($_GET["theme"] == "light"){echo '<link type= "text/css"; rel= "stylesheet"; href= "/stylesheet.css">';} else{echo '<link type= "text/css"; rel= "stylesheet"; href= "/stylesheet.css">';} ?>

<head>
	<title>Alex Noto Home</title>
</head>

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">
			<h3>About Me</h3>
			<p>
				I'm Alex. I'm a student at Omaha Code School. I like making things. I want to make the web.
			</p>
		</div>

	</div>

<?php include("navigation/navigation.php"); ?>

</body>

</html>
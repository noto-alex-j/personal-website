<!DOCTYPE html>

<?php $title = "Goals"; ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "links"; ?>

<html>

<?php if ($_GET["theme"] == "dark"){echo '<link type= "text/css"; rel= "stylesheet"; href= "stylesheet alt.css">';} elseif ($_GET["theme"] == "light"){echo '<link type= "text/css"; rel= "stylesheet"; href= "stylesheet.css">';} else{echo '<link type= "text/css"; rel= "stylesheet"; href= "/personal-website/stylesheet.css">';} ?>

<head>
<title>Goals</title>
</head>

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">

			<h3>Personal Goals</h3>
			<ul>
				<li>Improve my time management skills</li>
				<br>
				<li>Get back into reading</li>
				<br>
				<li>Do more sketching and painting</li>
				<br>
				<li>Travel more!</li>
			</ul>

			<h3>Professional Goals</h3>
			<ul>
				<li>Develop my programming skills</li>
				<br>
				<li>Learn to build well-crafted products</li>
				<br>
				<li>Network with others in my field</li>
				<br>
				<li>Enjoy my job!</li>
			</ul>

		</div>

	</div>

<?php include("../navigation/navigation.php"); ?>

</body>

</html>
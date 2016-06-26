<!DOCTYPE html>

<?php $title = "Mechanical Mind"; ?>
<?php $dirfix = "../"; ?>
<?php $prefix = "links"; ?>

<html>

<?php if ($_GET["theme"] == "dark"){echo '<link type= "text/css"; rel= "stylesheet"; href= "/personal-website/stylesheet alt.css">';} elseif ($_GET["theme"] == "light"){echo '<link type= "text/css"; rel= "stylesheet"; href= "/personal-website/stylesheet.css">';} else{echo '<link type= "text/css"; rel= "stylesheet"; href= "/personal-website/stylesheet.css">';} ?>

<head>
<title>Mechanical Obsession</title>
</head>

<body id= "bodylayoutcontainer">

	<div id= "pagecontainer">

		<div id="topbox"></div>

		<div id= "pagecontents">

			<h3>Mechanical Mind</h3>

			<p>
				I'm a car guy. Always have been. It's an industry in which I'd like to work. But until then, here are some links to some of the leading companies I admire:
			</p>

			<a href= "http://www.onassisporsches.com"><img src= "http://www.onassisporsches.com/.cm4all/iproc.php/distressed%20Onassis.png/resize_152_80/distressed%20Onassis.png" /></a>
			<br>
			<br>
			<a href= "http://www.fluidmotorunion.com"><img src= "http://www.fluidmotorunion.com/wp-content/uploads/2015/07/logo.jpg" /></a>
			<br>
			<br>
			<a href="http://www.stanceworks.com"><img src= "http://stancewords.stanceworks.netdna-cdn.com/wp-content/uploads/2012/03/Resizebanner1.png" /></a>
			<br>
			<br>
			<a href= "http://www.elephantracing.com/index.htm"><img src= "http://www.elephantracing.com/images/logo_061813.png" /></a>

		</div>

	</div>

<?php include("../navigation/navigation.php"); ?>

</body>

</html>
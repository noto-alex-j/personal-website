
<link type= "text/css"; rel= "stylesheet"; href= "../stylesheet.css">

<?php 
$linkslinks = ($dirfix . "links"); 
$linkslist = scandir($linkslinks);

$articlelinks = ($dirfix . "articles");
$articlelist = scandir($articlelinks);
sort($articlelist);
?>

<div id= "linkcontainer">
<h3>Links</h3>

<ul>
	
	<li><a href= "<?php if ($prefix == ""){echo "Home.php";} else {echo "../Home.php";} ?>">Home</a></li>
	<br>
<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
	<li><a href= "<?php if ($prefix == ""){echo "links/";} else {echo "../links/";}?><?php echo ltrim($linkslist[$file], "//links/"); ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a></li>
	<br>
<?php } ?>
</ul>

<h3>Articles</h3>

<ul>
<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<li><a href= "<?php if ($prefix == ""){echo "articles/";} else {echo "../articles/";}?><?php echo ltrim($articlelist[$file], "//articles/"); ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a></li>
		<br>
<?php } ?>
</ul>


<h3>Social Media</h3>

<ul>
	<li><a href="https://www.facebook.com/alex.noto">Facebook</a></li>
	<br>
	<li><a href="https://github.com/noto-alex-j">Github</a></li>
</ul>
</div>

<?php
//Separate folders for navigation, separate arrays for each section
//link title is filelist[file] which is a string, just remove .php extension from end
?>
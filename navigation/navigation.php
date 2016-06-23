
<?php 
$linkslinks = ($dirfix . "links"); 
$linkslist = scandir($linkslinks);

$articlelinks = ($dirfix . "articles");
$articlelist = scandir($articlelinks);
sort($articlelist);
?>


<h3>Links</h3>

<ul>
	<li><a href= "Home.php">Home</a></li>
	<br>
<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
	<li><a href= "<?php echo rtrim($linkslist[$file], "links/"); ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a></li>
	<br>
<?php } ?>
</ul>

<h3>Articles</h3>

<ul>
<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<li><a href= "<?php echo rtrim($articlelist[$file], "articles/"); ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a></li>
		<br>
<?php } ?>
</ul>


<h3>Social Media</h3>

<ul>
	<li><a href="https://www.facebook.com/alex.noto">Facebook</a></li>
	<br>
	<li><a href="https://github.com/noto-alex-j">Github</a></li>
</ul>

<?php
//Separate folders for navigation, separate arrays for each section
//link title is filelist[file] which is a string, just remove .php extension from end
?>
<?php 
$linkslinks = "/Users/Alex/Code/personal-website/links"; 
$linkslist = scandir($linkslinks);

$articlelinks = "/Users/Alex/Code/personal-website/articles";
$articlelist = scandir($articlelinks);
sort($articlelist);
?>

<h3>Links</h3>

<ul>
	<li><a href= "/personal-website/home.php">Home</a></li>
	<br>
<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
	<li><a href= "/personal-website/links/<?php echo $linkslist[$file]; ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a></li>
	<br>
<?php } ?>
</ul>

<h3>Articles</h3>

<ul>
<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<li><a href= "/personal-website/articles/<?php echo $articlelist[$file]; ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a></li>
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
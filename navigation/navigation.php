
<link type= "text/css"; rel= "stylesheet"; href= "../stylesheet.css">

<?php 
$linkslinks = ($dirfix . "links"); 
$linkslist = scandir($linkslinks);

$articlelinks = ($dirfix . "articles");
$articlelist = scandir($articlelinks);
sort($articlelist);
?>

<!-- Links Container -->
<div id= "overalllinkcontainer">

<!-- ----------------------------------------------------------------------------------------------- -->

<!-- -----Links List Subcontainer----- -->

<div class= "dropdown">

	<h3 class= "dropdownbutton">Links</h3>

	<div class= "dropdowncontent">
		<a href= "<?php if ($prefix == ""){echo "Home.php";} else {echo "../Home.php";} ?>">Home</a>
		<br>
		<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
		<a href= "<?php if ($prefix == ""){echo "links/";} else {echo "../links/";}?><?php echo ltrim($linkslist[$file], "//links/"); ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a>
		<br>
		<?php } ?>
	</div>

</div>

<!-- -----Articles List Subcontainer----- -->

<div class= "dropdown">

	<h3 class= "dropdownbutton">Articles</h3>

	<div class= "dropdowncontent">
		<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<a href= "<?php if ($prefix == ""){echo "articles/";} else {echo "../articles/";}?><?php echo ltrim($articlelist[$file], "//articles/"); ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a>
		<br>
		<?php } ?>
	</div>

</div>

<!-- -----Social Media List Subcontainer----- -->

<div class= "dropdown">

	<h3 class= "dropdownbutton">Social Media</h3>

	<div class= "dropdowncontent">
		<a href="https://www.facebook.com/alex.noto">Facebook</a>
		<br>
		<a href="https://github.com/noto-alex-j">Github</a>
	</div>

</div>

<!-- ------------------------------------------------------------------------------------------------ -->

</div>

<?php
//Separate folders for navigation, separate arrays for each section
//link title is filelist[file] which is a string, just remove .php extension from end
?>
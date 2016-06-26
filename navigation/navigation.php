
<link type= "text/css"; rel= "stylesheet"; href= "../stylesheet.css">

<?php 
$linkslinks = ($dirfix . "links"); 
$linkslist = scandir($linkslinks);

$articlelinks = ($dirfix . "articles");
$articlelist = scandir($articlelinks);
sort($articlelist);
?>


<!-- ----------------------------------------Navigation Container-------------------------------------------- -->

<div id= "navigationcontainer">

<div id= "logo">Alex Noto</div>

<!-- ------------------------------------------------------------- -->

<!-- -----Home Subcontainer----- -->

<div class= "dropdown">

	<div class= "dropdownbutton"><h3><a href= "<?php if ($prefix == ""){echo "Home.php";} else {echo "../Home.php";} ?>">Home</a></h3></div>

</div>

<!-- -----Links List Subcontainer----- -->

<div class= "dropdown">

	<div class= "dropdownbutton"><h3>Links</h3></div>

	<div class= "dropdowncontent">
		<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
		<a href= "<?php if ($prefix == ""){echo "links/";} else {echo "../links/";}?><?php echo ltrim($linkslist[$file], "//links/"); ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a>
		<?php } ?>
	</div>

</div>

<!-- -----Articles List Subcontainer----- -->

<div class= "dropdown">

	<div class= "dropdownbutton"><h3>Articles</h3></div>

	<div class= "dropdowncontent">
		<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<a href= "<?php if ($prefix == ""){echo "articles/";} else {echo "../articles/";}?><?php echo ltrim($articlelist[$file], "//articles/"); ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a>
		<?php } ?>
	</div>

</div>

<!-- -----Social Media List Subcontainer----- -->

<div class= "dropdown">

	<div class= "dropdownbutton"><h3>Social Media</h3></div>

	<div class= "dropdowncontent">
		<a href="https://www.facebook.com/alex.noto">Facebook</a>
		<a href="https://github.com/noto-alex-j">Github</a>
	</div>

</div>

<!-- ------------------------------------------- -->

</div>

<!-- -----------------------------------------End Navigation Container-------------------------------------------- -->


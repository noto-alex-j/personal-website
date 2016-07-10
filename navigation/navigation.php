<?php 
$linkslinks = ($dirfix . "links"); 
$linkslist = scandir($linkslinks);

$articlelinks = ($dirfix . "articles");
$articlelist = scandir($articlelinks);
sort($articlelist);

$gameslinks = ($dirfix . "games"); 
$gameslist = scandir($gameslinks);
?>


<!-- ----------------------------------------Navigation Container-------------------------------------------- -->

<div class= "navigationcontainer">

	<div class= "logo">Alex Noto</div>

<!-- ------------------------------------------------------------- -->

<!-- -----Home Subcontainer----- -->

	<div class= "dropdown">

		<div class= "button"><h3><a class= "button__home" href= "<?php if ($prefix == ""){echo "index.php";} else {echo "../index.php";} ?>">Home</a></h3></div>

	</div>

<!-- -----Links List Subcontainer----- -->

	<div class= "dropdown">

		<div class= "button"><h3>Links</h3></div>

		<div class= "content">
		<?php for ($file = 3; $file < count($linkslist); $file++) { ?>
		<a class= "content__link <?php if (rtrim($linkslist[$file], ".php") == $title) { echo "currentpage"; } ?>" href= "<?php if ($prefix == ""){echo "links/";} else {echo "../links/";}?><?php echo ltrim($linkslist[$file], "//links/"); ?>"><?php echo rtrim($linkslist[$file], ".php"); ?></a>
		<?php } ?>
		</div>

	</div>

<!-- -----Articles List Subcontainer----- -->

	<div class= "dropdown">

		<div class= "button"><h3>Articles</h3></div>

		<div class= "content">
		<?php for ($file = 3; $file < count($articlelist); $file++) { ?>
		<a class= "content__link <?php if (rtrim($articlelist[$file], ".php") == $title) { echo "currentpage"; } ?>" href= "<?php if ($prefix == ""){echo "articles/";} else {echo "../articles/";}?><?php echo ltrim($articlelist[$file], "//articles/"); ?>"><?php echo rtrim($articlelist[$file], ".php"); ?></a>
		<?php } ?>
		</div>

	</div>

<!-- -----Games List Subcontainer----- -->

	<div class= "dropdown">

		<div class= "button"><h3>Games</h3></div>

		<div class= "content">
		<?php for ($file = 3; $file < count($gameslist); $file++) { ?>
		<a class= "content__link <?php if (rtrim($gameslist[$file], ".php") == $title) { echo "currentpage"; } ?>" href= "<?php if ($prefix == ""){echo "games/";} else {echo "../games/";}?><?php echo ltrim($gameslist[$file], "//games/"); ?>"><?php echo rtrim($gameslist[$file], ".php"); ?></a>
		<?php } ?>
		</div>

	</div>

<!-- -----Social Media List Subcontainer----- -->

	<div class= "dropdown">

		<div class= "button"><h3>Social Media</h3></div>

		<div class= "content">
			<a class= "content__link" href="https://www.facebook.com/alex.noto">Facebook</a>
			<a class= "content__link" href="https://github.com/noto-alex-j">Github</a>
		</div>

	</div>

<!-- ----------Theme Switcher------------- -->

	<div class= "dropdown">

		<div class= "button"><h3>Theme Switcher</h3></div>

		<div class= "content">
			<a class= "content__link" href="?theme=light">Light</a>
			<a class= "content__link" href="?theme=dark">Dark</a>
		</div>	

	</div>


<!-- ------------------------------------------- -->

</div>

<!-- -----------------------------------------End Navigation Container-------------------------------------------- -->


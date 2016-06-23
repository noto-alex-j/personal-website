<?php 
$dir = "/Users/Alex/Code/personal-website/links"; 
$filelist = scandir($dir); 
?>


<?php for ($file = 4; $file < count($filelist); $file++) { ?>
	<ul><li><a href= "<?php echo $filelist[$file]; ?>"><?php echo rtrim($filelist[$file], ".php"); ?></a></li></ul>
<?php } ?>

//Separate folders for navigation, separate arrays for each section
//link title is filelist[file] which is a string, just remove .php extension from end
<!DOCTYPE html>

<?php $title = "home" ?>
<?php $dirfix = ""; ?>
<?php $prefix = ""; ?>

<html>

<head>
<title>Alex Noto Home</title>
</head>

<body>
<h1 style = "text-align: center">Alex Noto</h1>
<hr>

<h3>About Me</h3>
<p>
I'm Alex. I'm a student at Omaha Code School. I like making things. I want to make the web.
</p>

<?php include("navigation/navigation.php"); ?>

<?php echo getcwd() ?>

</body>
</html>
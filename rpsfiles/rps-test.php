<?php include ("rps-code.php"); ?>

<?php

echo "Testing result of player choosing rock and computer choosing scissors:";

if (result("rock","scissors") == "win") {
	echo "Success!";
}
else {
	echo "Failed.";
}

?>

<?php

echo "Testing result of player choosing paper and computer choosing paper:";

if (result("paper","paper") == "tie") {
	echo "Success!";
}
else {
	echo "Failed.";
}

?>

<?php

echo "Testing result of player choosing scissors and computer choosing rock:";

if (result("scissors","rock") == "lose") {
	echo "Success!";
}
else {
	echo "Failed.";
}

?>
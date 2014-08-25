<?php

if (empty($_GET['t'])) {
	header("location: team.php");
} elseif (empty($_GET['m'])) {
	header("location: memb.php");
} elseif (empty($_GET['b'])) {
	header("location: batt.php");
} else {
	echo 'TEAM ' . $_GET['t'];
}

?>
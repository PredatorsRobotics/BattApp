<?php
session_start();

if (!empty($_GET['t'])) {
	$_SESSION['TID']=$_GET['t'];
	if (!empty($_GET['m'])) {
		$_SESSION['MID']=$_GET['m'];
		if (!empty($_GET['b'])) {
			$_SESSION['BID']=$_GET['b'];
		} elseif (empty($_SESSION['BID'])) {
			header('Location: batt.php');
		}
	} elseif (empty($_SESSION['MID'])) {
		header('Location: memb.php');
	}
} elseif (empty($_SESSION['TID'])) {
	header('Location: team.php');
}
	
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title></title>
</head>
<body>
<div class="container">
<ul class="nav nav-pills nav-justified">
  <li><a href="#">Team <span class="label label-default"><?php echo $_SESSION['TID']; ?></span></a></li>
  <li><a href="#">Member <span class="label label-default"><?php echo $_SESSION['MID']; ?></span></a></li>
  <li><a href="#">Battery <span class="label label-default"><?php echo $_SESSION['BID']; ?></span></a></li>
</ul>

</div>
</body>
</html>
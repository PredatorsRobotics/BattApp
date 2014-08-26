<?php session_start(); ?>
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
  <li><a href="team.php">Team <span class="label label-default"><?php echo $_SESSION['TID']; ?></span></a></li>
  <li class="active"><a href="#">Member</a></li>
  <li class="disabled"><a href="#">Battery</a></li>
</ul>
<br>
<form method="get" action="index.php">
<div class="input-group">
  <input type="text" name="m" class="form-control" placeholder="Member ID" autofocus>
  <input type="hidden" name="t" value="<?php echo $_SESSION['TID']; ?>">
  <input type="submit">
</div>
</form>
</div>
</body>
</html>
<?php
mysqli_connect('localhost','battery','battery','battery');
session_start();

if (!empty($_GET['t'])) {
	$_SESSION['TID']=$_GET['t'];
} elseif (empty($_SESSION['TID'])) {
	header('Location: team.php');
	exit;
}

if (!empty($_GET['m'])) {
	$_SESSION['MID']=$_GET['m'];
} elseif (empty($_SESSION['MID'])) {
	header('Location: memb.php');
	exit;
}

if (!empty($_GET['b'])) {
	$_SESSION['BID']=$_GET['b'];
} elseif (empty($_SESSION['BID'])) {
	header('Location: batt.php');
	exit;
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/docs.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title></title>
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */

/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}


/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top visible-md visible-lg" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BattApp</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin">Dashboard</a></li>
            <li><a href="sess.php">New</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
<div class="visible-md visible-lg" style="height: 50px;">&nbsp</div>
<div class="container">
<ul class="nav nav-pills nav-justified">
  <li><a href="team.php">Team <span class="label label-default"><?php echo $_SESSION['TID']; ?></span></a></li>
  <li><a href="memb.php">Member <span class="label label-default"><?php echo $_SESSION['MID']; ?></span></a></li>
  <li><a href="batt.php">Battery <span class="label label-default"><?php echo $_SESSION['BID']; ?></span></a></li>
</ul>

</div>
</body>
</html>
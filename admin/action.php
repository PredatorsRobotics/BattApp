<?php session_start(); 

$con=mysqli_connect("localhost","battery","robot","battery");

$A = $_POST['A'];
$TID = $_SESSION['TID'];
$Type = $_POST['Type'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];

if(!empty($LastName)) {
mysqli_query($con,"INSERT INTO `$TID` (Type, FirstName, LastName)
VALUES ('$Type', '$FirstName', '$LastName')");

if($Type == MEMB) {
header('Location: memb.php');
exit;
}
if($Type == BATT) {
header('Location: batt.php');
exit;
}

}

if(empty($LastName)) {

mysqli_query($con,"DELETE FROM `$TID` WHERE FirstName='" . $FirstName . "'");

if($Type == MEMB) {
header('Location: memb.php');
exit;
}

if($Type == BATT) {
header('Location: batt.php');
exit;
}

}

?>
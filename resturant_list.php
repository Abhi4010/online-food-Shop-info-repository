
<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>
<?php include 'assets/leftmenu.php'; ?>
<?php
$city_id=$_GET['city'];
$city_name = get_city_name($city_id);
$city_id=$_GET['city'];
$city_name = get_city_name($city_id);
?>

<?php include 'assets/mainview_search.php'; ?>
<?php include 'assets/rightmenu.php'; ?>


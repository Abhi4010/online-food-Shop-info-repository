
<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>
<?php include 'assets/leftmenu.php'; ?>
<?php 
$id=$_GET['id'];
$resturantmap=get_resturantmap_by_id($id);
$resturant=get_resturant_by_id($id);
if (isset($_POST['submit']))
{
		
}
?>
<?php include 'assets/mainview_map.php'; ?>
<?php include 'assets/rightmenu.php'; ?>





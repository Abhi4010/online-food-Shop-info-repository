
<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>
<?php include 'assets/leftmenu.php'; ?>
<?php 
$id=$_GET['id'];
$resturant=get_resturant_by_id($id);
$avg_rating=get_ratingavg_by_id($id);
$total_rating=get_ratingtotal($id);
if (isset($_POST['submit']))
{
		
}
?>
<?php echo $avg_rating; ?>
<?php include 'assets/mainview_rating.php'; ?>
<?php include 'assets/rightmenu.php'; ?>




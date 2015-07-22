
<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>
<?php include 'assets/leftmenu.php'; ?>
<?php include 'assets/mainview_home.php'; ?>
<?php include 'assets/rightmenu.php'; ?>

<?php

if (isset($_POST['submit']))
{
	$city_id = $_POST['dropdown_city'];
	
	//echo "resturant_list.php?city={$city_id}";
	redirect_to("resturant_list.php?city={$city_id}");

}


?>

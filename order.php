
<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>
<?php include 'assets/leftmenu.php'; ?>
<?php
$submit = 0;

if (isset($_POST['submit']))
{
	$submit = 1;
	$cuisine_id = $_POST['cuisine'];
	$item_id = $_POST['item'];
	$city_id = $_POST['city'];
	$low = $_POST['low'];
	$high = $_POST['high'];
	
	if(!is_numeric($low)) $low=0;
	if(!is_numeric($high)) $high=10000;
	
	//if($item_id>0) $cuisine_id=0;
	
	
	//if($cuisine_id == 0) echo "NULL";
	//else echo "Not NULL"; 
	
	//echo "resturant_list.php?city={$city_id}";
	//redirect_to("resturant_list.php?city={$city_id}");
		
}


?>
<?php include 'assets/menuorder.php'; ?>

<?php include 'assets/rightmenu.php'; ?>



	
	
</html>

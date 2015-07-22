<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>

<?php
$id=$_GET['id'];
$resturant=get_resturant_by_id($id);
$msg="";
if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$item = $_POST['item'];
	$new_item = $_POST['new_item'];
	$cuisine = $_POST['cuisine'];
	$new_cuisine = $_POST['new_cuisine'];
	$amount = $_POST['amount'];
	$price = $_POST['price'];
	$info = $_POST['info'];
	
	if($name==NULL) $msg="Name Cannot be Empty";
	else if($amount==NULL) $msg="Amount Cannot be Empty";
	else if($price==NULL) $msg="Price Cannot be Empty";
	
	else
	{
		if($item==0 && $new_item==NULL)
		{
			$msg='Enter New Item';
			
		}
		
		else if($cuisine==0 && $new_cuisine==NULL)
		{
			$msg='Enter New Cuisine';
		}
		
		else
		{
			if(!is_numeric($price) ) $msg='price should be a number';
			
			else
			{				
				$price=(int)floor($price);
				
				if($item==0) $item=insert_item($new_item);
				if($cuisine==0) $cuisine=insert_cuisine($new_cuisine);
				
				
				$orders=rand(3,20);
				
				insert_food($id,$name,$item,$cuisine,$orders,$amount,$price,$info);
				
				$msg=" Successfully Inserted ";
				
				
			}
		}
		
		
	}
		
}


?>


<?php include 'assets/leftmenu.php'; ?>
<?php include 'assets/mainview_create_item.php'; ?>
<?php include 'assets/rightmenu.php'; ?>



<?php require_once ("includes/model.php");?>
<?php include 'assets/header.php'; ?>
<?php include 'assets/search.php'; ?>
<?php include 'assets/login.php'; ?>

<?php
$id=$_GET['id'];
$resturant=get_resturant_by_id($id);
$msg="";
if (isset($_POST['offer_submit']))
{
	$name = $_POST['offer_name'];
	$price = $_POST['offer_price'];
	$cuisine = $_POST['cuisine'];
	$discount = $_POST['discount'];
	$info = $_POST['offer_info'];
	
	if($name==NULL) $msg="Name Cannot be Empty";
	else if($price==NULL) $msg="Price Cannot be Empty";
	
	else if(!is_numeric($price)) $msg="Price has to be number";
	
	else if($discount!=NULL && !is_numeric($discount)) $msg="Discount has to be number";
	
	else
	{
		$count=0;
		$ok=1;
		$myarray= array();
		
		$my_food_set = get_food_resturant($id);
		while($myfoodrow=mysql_fetch_array($my_food_set)) {
		
			if($ok==0) break;
		
			$food_id=$myfoodrow['food_id'];
			$food_name=$myfoodrow['name'];
			$cname="name_";
			$camount="amount_";
			$cname.="{$food_id}";
			$camount.="{$food_id}";
			
			if (isset($_POST[$cname])) {
					$myamount=$_POST[$camount];
					if($myamount==NULL)
					{
						$ok=0;
						break;
					}
					
					$myarray[]=$food_id;
					$myarray[]=$myamount;
					$count++;
				}
		
					
		}
		
		if($ok==0)
		{
			$msg="All selected food must have amounts";
		}
		
		else if($count==0)
		{
			$msg="Select At least One Item";
		
		}
		
		
		
		else
		{
			$orders=rand(3,20);
			
			$offer_id=insert_offer($id,$name,$cuisine,$price,$orders,$discount,$info);
			
			$arrlength=count($myarray);

			for($x=0;$x<$arrlength;$x+=2)
			  {
				insert_offer_food($offer_id,$myarray[$x],$myarray[$x+1]);
			  }
			  
			  $msg="Offers insertion successful";
			
		}
		
		
	}
		
}


?>
<?php include 'assets/leftmenu.php'; ?>
<?php include 'assets/mainview_create_offer.php'; ?>
<?php include 'assets/rightmenu.php'; ?>



	
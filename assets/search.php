<div class="col-md-7" >
	<h1 Style="color:#ffffff;"><a href="home.php" style="color:#ffffff;">Find Your Food <a/></h1>
	<p Style="color:#ffffff;">Get to know everything about foodshops near you</p>
	<div class="row">
		<div class ="col-md-8">
			      <form class="navbar-form navbar-left" role="search" action="home.php" method="post">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <select name="dropdown_city" style="font-size:large;">
			        	<?php $result = get_all_city();
			        	while($myrow=mysql_fetch_array($result)) { ?>
			        	
			        	<option value="<?php echo $myrow['city_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>
			        	
			        	<?php } ?>
			        	
			        </select>

			        <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
			      </form>
			
		</div>
		<div class ="col-md-4">
			<div class="massive ui red button">
     <span> <a href="order.php" style="color:white;">Order by preference</a></span>
</div>
		</div>
	</div>
</div>

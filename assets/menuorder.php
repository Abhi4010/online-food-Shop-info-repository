 <div class="col-md-7">
            <div class="panel panel-default" s>
              <div class="panel-body" style="min-height:600px;"   >
                

      <!-- Table Viewport-->
  <form action="order.php" method="post">
     <div class="ui blue segment"> 
    <h2 class="ui teal header"> Select Cuisine :
     <span>
      <select name="cuisine">
      <option value="0"></option>
      <?php $cuisine_set = get_every_cuisine();
      while($myrow=mysql_fetch_array($cuisine_set)) { ?>
        
      <option value="<?php echo $myrow['cuisine_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>
        
      <?php } ?>
        
      </select>
      </span>
    </h2>
  </div>
      
    
     <div class="ui blue segment"> 
    <h2 class="ui teal header"> Select Item :
      <span>
        <select name="item">
    <option value="0"></option>
    <?php $item_set = get_every_item();
    while($myrow=mysql_fetch_array($item_set)) { ?>
      
    <option value="<?php echo $myrow['item_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>
      
    <?php } ?>
      
    </select>

      </span>
    </h2>
      </div>
    
    
   <div class="ui blue segment"> 
    <h2 class="ui teal header">  Select City :
      <span>
        <select name="city">
        <option value="0"></option>
        <?php $item_set = get_all_city();
        while($myrow=mysql_fetch_array($item_set)) { ?>
          
        <option value="<?php echo $myrow['city_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>
          
        <?php } ?>
          
        </select>
      </span>

     </h2>
   </div>

      
    
    
    <div class="ui blue segment"> 
    <h2 class="ui teal header"> 
      Price Range : 
      <span>
         <input type="text" name="low" maxlength="30"  value="0" />
             To 
    
    <input type="text" name="high" maxlength="30"  value="10000" />
    
      </span>

    </h2>
  </div>
    
   

      
    </br><input class="btn btn-default" type="submit" name="submit" value="Submit" />
      
  </form>
  
  <?php if($submit==1) { ?>
    <h2 class="ui purple header">
 List of Suggested Foods : <h3>
    
    
    <div style="overflow:auto;">
    <table class="ui celled table segment" border=1>
      <tr>
        <th> Name </th>
        <th> Resturant </th>
        <th> Amount </th>
        
        <th> Orders </th>
        <th> Price </th>
        <th> Image </th>
        <th> Order Now </th>
      
      <tr>
    
    <?php 
            if($item_id>0) $my_cuisine=0;
            else $my_cuisine=$cuisine_id;
    $food_set=get_suggested_food($my_cuisine,$item_id,$low,$high);
    
    while($myfood=mysql_fetch_array($food_set)) {
    
      $resturant=get_resturant_by_id($myfood['resturant_id']);
      
      if($city_id>0 && $resturant['city_id']!=$city_id) continue;
    ?>
    
    <tr>
        <td><?php echo $myfood['name'];?></td>
        <td><a href="resturant_home.php?id=<?php echo $resturant['resturant_id'];?>"><?php echo $resturant['name'];?></a></td>
        <td><?php echo $myfood['amount'];?></td>
        
        <td><?php echo $myfood['orders'];?></td>
        <td><?php echo $myfood['price'];?></td>
        <td><img src="images/<?php echo $myfood['imagename'];?>"   height="75" width="75" ></td>
        <td><a href="#">Order Now</td>
        
    </tr>
    
    
    
    
    
    <?php } ?>
    
    </table>
    </div>
    
     <h2 class="ui purple header">List of Suggested Special Offers : <h3>
    <div style="overflow:auto;">
    <table class="ui celled table segment" >
      <tr>
        <th> Name </th>
        <th> Resturant </th>
        <th> Cuisine </th>
        <th> Price </th>
        <th> Discount </th>
        <th> Orders </th>
        <th> Details </th>
      
      <tr>
    
    <?php 

    $offer_set=get_suggested_offer($cuisine_id,$low,$high);
    
    while($myoffer=mysql_fetch_array($offer_set)) {
    
      $resturant=get_resturant_by_id($myoffer['resturant_id']);
      
      if($city_id>0 && $resturant['city_id']!=$city_id) continue;
    ?>
    
    <tr>
        <td><?php echo $myoffer['offer_name'];?></td>
        <td><a href="resturant_home.php?id=<?php echo $resturant['resturant_id'];?>"><?php echo $resturant['name'];?></a></td>
        <td><?php echo get_cuisine_name($myoffer['cuisine_id']);?></td>
        <td><?php echo $myoffer['price'];?></td>
        <td><?php echo $myoffer['discount'];?></td>
        <td><?php echo $myoffer['orders'];?></td>
        <td><a href="show_offer.php?id=<?php echo $myoffer['offer_id'] ?>&resturant_id=<?php echo $resturant['resturant_id'] ?>">Details</td>
        
    </tr>
    
    
    
    <?php } ?>
    
    </table>
    </div>
  <?php } ?>

  
  
  
  



      </div>
    </div>
  </div>
 <div class="col-md-7">
            <div class="panel panel-default" s>
              <div class="panel-body" style="min-height:600px;"   >
                 <h4>
                
                  <img src="images/<?php echo $resturant['imagename'] ;?>"  height="100" width="100" >
                  <span  class="ui inverted teal block header">
                    <?php echo $resturant['name']; ?>
                  </span>
          
               </h4>
               <ul class="nav nav-tabs"  >
                  <li><a href="resturant_home.php?id=<?php echo $id; ?>" >Basic</a></li>
                  <li ><a href="resturant_menu.php?id=<?php echo $id; ?>" >Menu</a></li>
                  <li class="#"><a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo "0"; ?>" >Photos</a></li>
                  <li class="#" ><a href="resturant_review.php?id=<?php echo $id; ?>">Reviews</a></li>
                  <li class="active"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>

      <!-- Table Viewport-->
        <?php $result = get_all_offer($id);
  while($myrow=mysql_fetch_array($result)) { ?> 
  
    
    <table class="ui celled table segment">
    <tr>
      <td>Offer name :</td>
      <td> <?php echo $myrow['offer_name']; ?> </td>
    <tr>
    
    
    <tr>
      <td>Cuisine :</td>
      <td> <?php echo get_cuisine_name($myrow['cuisine_id']); ?> </td>
    <tr>
    
    
    <tr>
      <td>Price :</td>
      <td> <?php echo $myrow['price']; ?> </td>
    <tr>
    
    <tr>
      <td>Discount</td>
      <td> <?php echo $myrow['discount']; ?> </td>
    <tr>
    </table>
    </center>
    
    
    
    <table  class="ui celled table segment" border=1>
      <tr>
        <th> Name </th>
        <th> Amount </th>
        <th> Info </th>
        <th> Orders </th>
        <th> Original Price </th>
        <th> Image </th>
      
      <tr>
    
    
    <?php
      $foods=get_food_offer($myrow['offer_id'],$id);
      
      while($myfoodid=mysql_fetch_array($foods)) { 
        $myfood=get_food_id($myfoodid['food_id']);
      ?>
      
      <tr>
        <td><?php echo $myfood['name'];?></td>
        <td><?php echo $myfood['amount'];?></td>
        <td><?php echo $myfood['info'];?></td>
        <td><?php echo $myfood['orders'];?></td>
        <td><?php echo $myfood['price'];?></td>
        <td><img src="images/<?php echo $myfood['imagename'];?>"   height="75" width="75" ></td>
        
      </tr>

      
      <?php } ?>
      
    
 <?php } ?>
        </table>




      </div>
    </div>
  </div>
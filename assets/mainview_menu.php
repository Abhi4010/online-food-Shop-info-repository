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
                  <li class="active"><a href="resturant_menu.php?id=<?php echo $id; ?>" >Menu</a></li>
                  <li class="#"><a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo "0"; ?>" >Photos</a></li>
                  <li class="#" ><a ="resturant_review.php?id=<?php echo $id; ?>">Reviews</a></li>
                  <li class="#"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>

      <!-- Table Viewport-->


     <?php $result = get_all_cuisine($id);
     while($myrow=mysql_fetch_array($result)) { 
      $cuisine_name=get_cuisine_name($myrow['cuisine_id']);
      ?>
     

      <table class="ui celled table segment">
        <thead>
           <h2  class="ui teal header"><?php echo $cuisine_name ; ?></h2>
          <tr>
           <th> Name </th>
                  <th> Amount </th>
                  <th> Info </th>
                  <th> Orders </th>
                  <th> Price </th>
                  <th> Image </th>
                  <th> Order Now </th>
          </tr>
        </thead>
        <?php
          $foods=get_food_cuisine_resturant($myrow['cuisine_id'],$id);
          
          while($myfood=mysql_fetch_array($foods)) { ?> 
          <tr>
            <td><?php echo $myfood['name'];?></td>
            <td><?php echo $myfood['amount'];?></td>
            <td><?php echo $myfood['info'];?></td>
            <td><?php echo $myfood['orders'];?></td>
            <td><?php echo $myfood['price'];?></td>
            <td><img src="images/<?php echo $myfood['imagename'];?>"   height="50" width="50" ></td>
            <td><a href="#">Order Now</td>    
          </tr>
          <?php } ?>
      <?php } ?>
        </table>




      </div>
    </div>
  </div>
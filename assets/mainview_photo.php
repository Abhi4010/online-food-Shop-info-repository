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
                  <li class="#"><a href="resturant_home.php?id=<?php echo $id; ?>" >Basic</a></li>
                  <li ><a href="resturant_menu.php?id=<?php echo $id; ?>" >Menu</a></li>
                  <li class="active"><a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo "0"; ?>" >Photos</a></li>
                  <li class="#" ><a href="resturant_review.php?id=<?php echo $id; ?>">Reviews</a></li>
                  <li class="#"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>

                   
                   <?php 
                 $image = array();
                 $iresult = get_image_by_id($id);
                while($myrow=mysql_fetch_array($iresult)) { 
                    array_push($image,$myrow['image']);
                  }
                  ?>       

                  

                 <div class="ui huge images">
                   <img src="images/<?php echo $image[$photo_id]; ?>" style="margin-left: auto;
                   margin-right: auto ;  display: block; "  height="500" width="145">
                 </div>

                 
                  <div class="ui small images">
                    <center>
                  <?php for( $i=0; $i < count($image); $i++){ ?>
                  <?php if($photo_id == $i): ?>
                  <a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo $i; ?>" ><img   src="images/<?php echo $image[$i]; ?>" ></a>
                  
                <?php else: ?>
                <a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo $i; ?>" ><img class="small disabled ui image"  src="images/<?php echo $image[$i]; ?>" ></a>
                  
                <?php endif ?>

                <?php  } ; echo "</center>";?>

                 </div>          
               
      </div>
    </div>
  </div>
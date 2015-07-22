 <div class="col-md-7">
            <div class="panel panel-default" s>
              <div class="panel-body" style="min-height:600px;"   >
                <div class="row">
                <div class="col-md-8">  
               <h4>
                
                  <img src="images/<?php echo $resturant['imagename'] ;?>"  height="100" width="100" >
                  <span  class="ui inverted teal block header">
                    <?php echo $resturant['name']; ?>
                  </span>
          
               </h4>
             </div>
             <div class="col-md-4">
                    <div class="huge ui green button">
                   <span> <a href="create_item.php?id=<?php echo $id; ?>" style="color:white;">Create New Item</a></span>
              </div>
            <br></br>
                    <div class="huge ui green button">
                   <span> <a href="create_offer.php?id=<?php echo $id; ?>" style="color:white;">Create New Offer</a></span>
              </div>
             </div>
             </div>
                 <ul class="nav nav-tabs"  >
                  <li class="active"><a href="resturant_home.php?id=<?php echo $id; ?>" >Basic</a></li>
                  <li ><a href="resturant_menu.php?id=<?php echo $id; ?>" >Menu</a></li>
                  <li class="#"><a href="resturant_photo.php?id=<?php echo $id; ?>&pp_id=<?php echo "0"; ?>" >Photos</a></li>
                  <li class="#" ><a href="resturant_review.php?id=<?php echo $id; ?>">Reviews</a></li>
                  <li class="#"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>

                <div class="ui info message">
                  <p style="font-size:medium;color:brown;">
                    About: </p>
                    <p><?php echo "\n";echo $resturant['info']; ?>
                  </p>
                </div>
               <div class="ui info message">
                <p style="font-size:medium;color:brown;">
                    Address: </p>
                 <p>
                   <?php echo $resturant['address']; ?>
                 </p>
               </div>
                <div class="ui info message">
                  <p style="font-size:medium;color:brown;">
                    Contact: </p>

                  <p>
                     <?php echo $resturant['contact']; ?>
                  </p>
                </div>
                <div class="ui info message">
                  <p style="font-size:medium;color:brown;">
                     Email: </p>
                  <p>
                    <?php echo $resturant['email']; ?>
                  </p>
                </div>

              </div>
            </div>
          </div>
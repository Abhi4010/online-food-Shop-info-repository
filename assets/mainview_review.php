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
                  <li class="active" ><a ="resturant_review.php?id=<?php echo $id; ?>">Reviews</a></li>
                  <li class="#"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>

      <!-- Table Viewport-->
               <div class="ui threaded comments">
               
                 <div class="comment">
                   <a class="avatar">
                     <img src="images/simon.jpg">
                   </a>
                   <div class="content">
                     <a class="author">Simple Simon</a>
                     <div class="metadata">
                       <span class="date">1 day ago</span>
                       
                     </div>

                     <div class="text">
                       Price is too much for me. But foods are good.
                     </div>
                   </div>
                   
                   <div class="ui  divider">
                    
                   </div>
                 </div>
                 <div class="comment">
                   <a class="avatar">
                     <img src="images/sakib.jpg">
                   </a>
                   <div class="content">
                     <a class="author">sakib Shafayet</a>
                     <div class="metadata">
                       <span class="date">20 hours ago</span>
                      
                     </div>
                     <div class="text">
                       Good shop. I would like to come more often :) :)
                     </div>
                    
                   </div>
                 </div>
                 <div class="ui  divider">
                  
                 </div>

                 <div class="comment">
                   <a class="avatar">
                     <img src="images/abhi.jpg">
                   </a>
                   <div class="content">
                     <a class="author">Ashike Abhi</a>
                     <div class="metadata">
                       <span class="date">15 hours ago</span>
                       
                     </div>
                     <div class="text">
                       This one is quite expensive for me. i would rather prefer BFC
                     </div>
                   </div>
                 </div>
               
                 <div class="ui  divider">
                  
                 </div>
               <div class="comment">
                   <a class="avatar">
                     <img src="images/shuvo.jpg">
                   </a>
                   <div class="content">
                     <a class="author">Shamim Seraj</a>
                     <div class="metadata">
                       <span class="date">20 hours ago</span>
                      
                     </div>
                     <div class="text">
                       Seriously!!! No one likes kfc.
                     </div>
                    
                 
                 </div>
                 </div>
               </div>





      </div>
    </div>
  </div>
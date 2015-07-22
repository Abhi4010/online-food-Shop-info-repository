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
                  <li class="#"><a href="resturant_offer.php?id=<?php echo $id; ?>" >Offers</a></li>
                  <li class="#"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                  <li class="active"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                </ul>
                <center>
                  <br>
                </br>
                  <h2 class="ui purple header">
                    User Rating: <?php printf("%.2f",$avg_rating['avg(rating)']); ?>
                    
                  </h2>  
                
                <div class="ui huge star rating"  data-rating="5">
                 
                    <i class="icon <?php if((int)$avg_rating['avg(rating)'] > 0) echo "active";?> "></i>
                    <i class="icon <?php if((int)$avg_rating['avg(rating)'] > 1) echo "active";?>"></i>
                    <i class="icon <?php if((int)$avg_rating['avg(rating)'] > 2) echo "active";?>"></i>
                    <i class="icon <?php if((int)$avg_rating['avg(rating)'] > 3) echo "active";?>"></i>
                    <i class="icon <?php if((int)$avg_rating['avg(rating)'] > 4) echo "active";?>"></i>
                
                  </div>


                <h3 class="ui purple header">
                  Rated by <?php echo $total_rating['count(rating)']; ?> users
                  
                </h3>  
                <table class="ui collapsing table segment">
                  <thead>
                    <tr><th>Rating</th>
                    <th>Users</th>
                  </tr></thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="ui rating">
                          <i class="icon active"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                        </div>
                      </td>
                      <td><?php $ratingcount=get_ratingcount_by_id($id,1);echo $ratingcount['count(rating)'];?>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="ui rating">
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                        </div>
                      </td>
                      <td><?php $ratingcount=get_ratingcount_by_id($id,2);echo $ratingcount['count(rating)'];?></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="ui rating">
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon"></i>
                          <i class="icon"></i>
                        </div>
                      </td>
                      <td><?php $ratingcount=get_ratingcount_by_id($id,3);echo $ratingcount['count(rating)'];?></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="ui rating">
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon"></i>
                        </div>
                      </td>
                      <td><?php $ratingcount=get_ratingcount_by_id($id,4);echo $ratingcount['count(rating)'];?></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="ui rating">
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                          <i class="icon active"></i>
                        </div>
                      </td>
                      <td><?php $ratingcount=get_ratingcount_by_id($id,5);echo $ratingcount['count(rating)'];?></td>
                    </tr>

                  </tbody>
                </table>
                </center>
                  
               
      </div>
    </div>
  </div>
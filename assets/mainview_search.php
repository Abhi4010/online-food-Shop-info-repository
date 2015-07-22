<div class="col-md-7">
  <div class="panel panel-default" >
    <div class="panel-body" style="min-height:330px;" >
      <h1 class="ui inverted red block header">
         Resturants of <?php echo $city_name; ?>
      </h1>

      <!-- Home Viewport-->

      <div class="ui five connected items">
        <?php $result = get_resturant_by_city($city_id);
          $item_count = 0;
          while($myrow=mysql_fetch_array($result)) { $item_count++;
            if( ($item_count%5) == 1 && $item_count != 1):?>
                
              
            </div>
            <div class="ui five connected items">
            <?php endif; ?> 


        <div class="item">
          <div class="image">
            <center>
            <a href="resturant_home.php?id=<?php echo $myrow['resturant_id'] ;?>">
      <img src="images/<?php echo $myrow['imagename'] ;?>"  height="145" width="145" ></a>
      </center>
            
          </div>
          <div class="content">
            <div class="name"><a href="resturant_home.php?id=<?php echo $myrow['resturant_id'] ;?>"><?php echo $myrow['name'] ;?></a></div>
            <p class="description"><?php echo $myrow['info'] ;?></p>
          </div>
        </div>
        <?php } ?>

        











      </div>

    </div>
  </div>

              <div class="panel panel-default" >
    <div class="panel-body" style="min-height:330px;" >
      <h2 class="ui inverted purple block header">
        Recommended
      </h2>

      <!-- Home Viewport-->

      <div class="ui five connected items">
        <div class="item">
          <div class="image">
            <img src="images/highres4.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Desription</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres5.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres3.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description"> Description</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres2.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description.</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description</p>
          </div>
        </div>
      </div>

    </div>
  </div>
              <div class="panel panel-default" >
    <div class="panel-body" style="min-height:330px;" >
      <h2 class="ui inverted teal block header">
        New entries
      </h2>

      <!-- Home Viewport-->

      <div class="ui five connected items">
        <div class="item">
          <div class="image">
            <img src="images/highres4.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Desription</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres5.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres3.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description"> Description</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres2.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description.</p>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/highres.jpg">
            <a class="star ui corner label">
              <i class="star icon"></i>
            </a>
          </div>
          <div class="content">
            <div class="name">Shop</div>
            <p class="description">Description</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
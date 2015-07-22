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
                                  <li class="active"><a href="resturant_map.php?id=<?php echo $id; ?>" >Location</a></li>
                                  <li class="#"><a href="resturant_rating.php?id=<?php echo $id;?>" >Ratings</a></li>
                                </ul>
                <div id="gmap_canvas" style='height:500px;width:780px'></div>
      <!-- Table Viewport-->
       <script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyCvgZQ5HN2GV_e-yG-D0msw7A59R2si3zY&sensor=false'></script>

       <script>
        
         var map;
         var marker;
         function initialize()
         {
           var markerInitPos = new google.maps.LatLng(<?php echo $resturantmap['lat']; ?>, <?php echo $resturantmap['long']; ?>);
           var mapProp = {
             disableDoubleClickZoom: true,
             center:new google.maps.LatLng(<?php echo $resturantmap['lat']; ?>, <?php echo $resturantmap['long']; ?>),
             zoom:12,
             mapTypeId:google.maps.MapTypeId.ROADMAP
           };
           map=new google.maps.Map(document.getElementById("gmap_canvas"),mapProp);


           marker = new google.maps.Marker({
             position: markerInitPos,
             map: map
           });


         }

         google.maps.event.addDomListener(window, 'load', initialize);



       </script>
       <div class="ui info message">
                <p style="font-size:medium;color:brown;">
                    Address: </p>
                 <p>
                   <?php echo $resturant['address']; ?>
                 </p>
               </div>

      </div>
    </div>
  </div>
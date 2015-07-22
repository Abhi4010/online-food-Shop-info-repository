 <div class="col-md-7">
  <div class="panel panel-default" s>
    <div class="panel-body" style="min-height:600px;"   >
     <h4>

      <img src="images/<?php echo $resturant['imagename'] ;?>"  height="100" width="100" >
      <span  class="ui inverted teal block header">
        <?php echo $resturant['name']; ?>
      </span>

    </h4>
    <div class="ui blue segment">
      <center>
  

      <h1 class="ui teal header"> Create New Offer </h1>
      <br></br>

     <center>
  
  
  <form action="create_offer.php?id=<?php echo $id; ?>" method="post">
  
  <table>
    <tr>
      <td><center> Offer Name : </center></td>
      
      <td>
        <input type="text" name="offer_name" maxlength="30"  />
      </td>
    
    </tr>
    
    <tr>
      <td><center> Cuisine : </center></td>
      
      <td>
        <select name="cuisine">
        <?php $cuisine_set = get_every_cuisine();
        while($myrow=mysql_fetch_array($cuisine_set)) { ?>
          
        <option value="<?php echo $myrow['cuisine_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>
          
        <?php } ?>
          
        </select>
      </td>
    
    </tr>
    
    <tr>
      <td><center> Price </center></td>
      
      <td>
        <input type="text" name="offer_price" maxlength="30"  />
      </td>
    
    </tr>
    
    <tr>
      <td><center> Discount : </center></td>
      
      <td>
        <input type="text" name="discount" maxlength="30"  />
      </td>
    
    </tr>
    <tr>
      <td><center> Info : </center></td>
      
      <td>
        <input type="text" name="offer_info" maxlength="30"  />
      </td>
    
    </tr>
    
  </table>
  
  
  
  <h2 class="ui teal header">  Select The item you want to include in the offer : </h2>
  
  <table class="ui celled table segment">  
  <tr>
    <th><center> Name </center></th>
    <th><center> Image </center></th>
    <th><center> Amount </center></th>
  </tr>
  
  
  <?php $food_set = get_food_resturant($id);
    while($myrow=mysql_fetch_array($food_set)) { ?>
    
    <tr>
    
    <td><input type="checkbox" name="name_<?php echo $myrow['food_id'] ;?>"  value="<?php echo $myrow['food_id'] ;?>"><?php echo  $myrow['name']; ?><br></td>
    
    <td><img src="images/<?php echo $myrow['imagename'] ;?>"  height="100" width="100" ></td>
    
    <td><input type="text" name="amount_<?php echo $myrow['food_id'] ;  ?>" maxlength="30"  /></td>
          
    <?php } ?>
  </tr>
  
  </table>
  
   <br></br><input class="btn btn-default" type="submit" name="offer_submit" value="Submit" />
    
  </form>
   <h2 class="ui red header"><?php echo $msg; ?> </h2>

</center>
</center>
  <div class="huge ui blue button">
     <span> <a href="resturant_home_admin.php?id=<?php echo $id ; ?>">Back to shop home</a></span>
</div>
  


</div>
  
  </div>


</div>
</div>
 <div class="col-md-6">
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
        <br>
      </br>


      <h1 class="ui teal header"> Create New Item </h1>
      <br></br>

      <form action="create_item.php?id=<?php echo $id; ?>" method="post">

        <table>
           
          <tr>

            <td><center>
              
              Item Name :
           

            </center></td>

            <td>
              <input type="text" name="name" maxlength="30"  />
            </td>
           
          </tr>


          <tr>
            <td> <center> Item Type: </center></td>

            <td>
              <select name="item">
                <option value="0"> Add new ... </option>
                <?php $item_set = get_every_item();
                while($myrow=mysql_fetch_array($item_set)) { ?>

                <option value="<?php echo $myrow['item_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>

                <?php } ?>

              </select>
            </td>

          </tr>

          <tr>
            <td> <center> New Item Type Name :</center> </td>

            <td>
              <input type="text" name="new_item" maxlength="30"  />
            </td>

          </tr>

          <tr>
            <td><center>Select Cuisine</center></td>
            <td>
              <select name="cuisine">
                <option value="0"> Add New ... </option>
                <?php $cuisine_set = get_every_cuisine();
                while($myrow=mysql_fetch_array($cuisine_set)) { ?>

                <option value="<?php echo $myrow['cuisine_id'] ;?>"> <?php echo  $myrow['name']; ?> </option>

                <?php } ?>

              </select>
            </td>
          </tr>

          <tr>
            <td><center>New Cuisine Name : </center></td>

            <td>
              <input type="text" name="new_cuisine" maxlength="30"  />
            </td>

          </tr>

          <tr>
            <td><center> Amount :</center></td>

            <td>
              <input type="text" name="amount" maxlength="30"  />
            </td>

          </tr>

          <tr>
            <td><center> Price : </center></td>

            <td>
              <input type="text" name="price" maxlength="30"  />
            </td>

          </tr>

          <tr>
            <td><center> Additional Info :</center></td>

            <td>
              <input type="text" name="info" maxlength="100"  />
            </td>

          </tr>

        </table>

        <br></br><input class="btn btn-default" type="submit" name="submit" value="Submit" />

      </form>

      <h2 class="ui red header"><?php echo $msg; ?> </h2>
        </center>

     <div class="huge ui blue button">
     <span> <a href="resturant_home_admin.php?id=<?php echo $id ; ?>">Back to shop home</a></span>
</div>
  
  </div>


</div>
</div>
</div>
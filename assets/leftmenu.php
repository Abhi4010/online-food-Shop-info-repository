 </div>
</div>
</div>
  <div class="row">
    <div class="col-md-2">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Cuisines
        </a>
            <?php  $cuisineresult = get_every_cuisine();
            while($myrow=mysql_fetch_array($cuisineresult)) {  ?>
             <a 
               href="#" class="list-group-item"><?php echo $myrow['name']; ?>
             </a>
              <?php } ?>
            
            </div>
          </div>
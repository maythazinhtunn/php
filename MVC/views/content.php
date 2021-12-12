    <div class="postcontent">
     <?php
     foreach ($productlist as $key => $value) {  ?>
     <a href="<?php echo BASE_URL;?>/Product/viewProductDetail/<?php echo $value['product_id']; ?>">
        <div id="single_product">
          <h4 align="center"><?php echo $value["product_title"];?></h4>
          <img src="http://localhost/MVC/product_images/<?php echo $value['product_image'];?>" width="115px" height="90px">
        </div>
     </a>

  <?php  }   ?>    
  </div>
</div>
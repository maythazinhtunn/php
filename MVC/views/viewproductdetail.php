      <div class="postcontent" style="text-align:center;">
        <div class="thumbnail">
          <form class="form-horizontal" enctype="multipart/form-data" action="http://localhost/MVC/Product/updateProductComplete" method="post">
            
            <?php foreach ($productdetail as $key => $value) { ?>

            <div class="row" style="margin:0;"><center><h2 style="margin-bottom:20px;font-weight:bold;">View Product Details</h2></center></div>
            <div class="row" style="margin:0;">
              
              <div class="col-md-3 col-sm-3 col-xs-3">
                   <img id="p_image" src="<?php echo BASE_URL ;?>/product_images/<?php echo $value['product_image']; ?>" width="250px" height="250px">
              </div>

              <div class="col-md-9 col-sm-9 col-xs-9">
                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><h4>Product Name:</h4></div>
                    <div class="col-md-4 col-sm-4 col-xs-5"><h4><?php echo $value['product_title']; ?></h4></div>
                 </div>

                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><h4>Category:</h4></div>
                    <div class="col-md-4 col-sm-4 col-xs-5">
                       <?php foreach ($catlist as $key => $cat) { ?> 
                      <?php if($cat['cat_id'] == $value['cat_id']){ ?>        
                         <h4><?php echo $cat['cat_title']; ?></h4>
                      
                    <?php } } ?>
                    </div>
                 </div>

                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><h4>Brand:</h4></div>
                    <div class="col-md-4 col-sm-4 col-xs-5">
                       <?php foreach ($brandlist as $key => $brand) { ?> 
                        <?php if($brand['brand_id'] == $value['brand_id']){ ?>       
                         <h4><?php echo $brand['brand_title']; ?></h4>
                      
                    <?php } } ?>
                    </div>
                 </div>

                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><h4>Product Price:</h4></div>
                    <div class="col-md-4 col-sm-4 col-xs-5"><h4><?php echo $value['product_price']; ?></h4></div>
                 </div>

                 <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><h4>Product Description:</h4></div>
                    <div class="col-md-4 col-sm-4 col-xs-5"><h4><?php echo $value['product_desc']; ?></h4></div>
                 </div>

              </div>
           </div>

           <?php }  ?>

         </form>
       </div>
     </div>
   </div>



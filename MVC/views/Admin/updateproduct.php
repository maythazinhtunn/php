      <div class="postcontent">
        <div class="thumbnail">
          <form class="form-horizontal" enctype="multipart/form-data" action="http://localhost/MVC/Product/updateProductComplete" method="post">
            
            <?php foreach ($updateproduct as $key => $value) { ?>

            <div class="row" style="margin:0;"><center><h2 style="margin-bottom:20px;font-weight:bold;">Update Category</h2></center></div>
            <div class="row" style="margin:0;">

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Product Name:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $value['product_id']; ?>" />
                  <input type="text" class="form-control" id="product_title" name="product_title" value="<?php echo $value['product_title']; ?>" required/>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Category:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <select class="form-control" name="cat_title">
                    <?php foreach ($categorylist as $key => $cat) { ?> 
                      <?php if($cat['cat_id'] == $value['cat_id']){ ?>        
                      <option value="<?php echo $cat['cat_id']; ?>" selected><?php echo $cat['cat_title']; ?></option>
                      <?php }else{ ?>

                      <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_title']; ?></option>
                    <?php } } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Brand:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <select class="form-control" name="brand_title">
                    <?php foreach ($brandlist as $key => $brand) { ?> 
                      <?php if($brand['brand_id'] == $value['brand_id']){ ?>        
                      <option value="<?php echo $brand['brand_id']; ?>" selected><?php echo $brand['brand_title']; ?></option>
                      <?php }else{ ?>

                      <option value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_title']; ?></option>
                    <?php } } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Product Price:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <input type="text" class="form-control" id="product_price" name="product_price" value="<?php echo $value['product_price']; ?>" required/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Product Image:</label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?php echo $value['product_image']; ?>" />
                  <input type="file" id="file" class="form-control" name="product_image" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                   <img id="p_image" src="<?php echo BASE_URL ;?>/product_images/<?php echo $value['product_image']; ?>" width="100px" height="100px">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Product Description:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <textarea type="text" class="form-control" id="product_desc" name="product_desc" required/><?php echo $value['product_desc']; ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label">Product Keyword:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <input type="text" class="form-control" id="product_keywords" name="product_keywords" value="<?php echo $value['product_keywords']; ?>" required/>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-5 col-xs-offset-5">
                 <button type="submit" class="btn btn-primary" name="update">Update Now</button>
               </div>
             </div>
           </div>

           <?php }  ?>

         </form>
       </div>
     </div>
   </div>



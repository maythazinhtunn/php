      <div class="postcontent" style="padding-top:5%;">

        <div class="thumbnail">
          <form class="form-horizontal" action="http://localhost/MVC/BrandController/updateBrandComplete" method="post">

            <div class="row" style="margin:0;"><center><h2 style="margin-bottom:20px;font-weight:bold;">Update Brand</h2></center></div>
            <div class="row" style="margin:0;">

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="title">Brand Title:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <?php 
                  foreach ($updbrand as $key => $value) { ?>
                    <input type="hidden" class="form-control" id="brand_id" name="brand_id" value="<?php echo $value['brand_id']; ?>" />
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $value['brand_title']; ?>" />
                  <?php }  ?>                
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-5 col-xs-offset-5">
                 <button type="submit" class="btn btn-primary" name="update">Update Now</button>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>



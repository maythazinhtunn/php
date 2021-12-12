      <div class="postcontent" style="padding-top:5%;">

        <div class="thumbnail">
          <form class="form-horizontal" action="http://localhost/MVC/CategoryController/updateCategoryComplete" method="post">

            <div class="row" style="margin:0;"><center><h2 style="margin-bottom:20px;font-weight:bold;">Update Category</h2></center></div>
            <div class="row" style="margin:0;">

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="title">Category Title:</label>
                <div class="col-md-5 col-sm-5 col-xs-5">
                  <?php 
                  foreach ($updcat as $key => $value) { ?>
                    <input type="hidden" class="form-control" id="cat_id" name="cat_id" value="<?php echo $value['cat_id']; ?>" />
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $value['cat_title']; ?>" />
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



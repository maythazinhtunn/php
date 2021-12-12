      <div class="postcontent" style="padding-top:5%;">
        <?php
        if(isset($msg)){
          echo "<span style='color:blue;font-weight:bold;'>".$msg."</span>";
        }

        ?>
        <div class="thumbnail">
        <form class="form-horizontal" action="http://localhost/MVC/CategoryController/insertCategory" method="post">
          
          <div class="row" style="margin:0;"><center><h2 style="margin-bottom:20px;font-weight:bold;">Insert Category Form</h2></center></div>
          <div class="row" style="margin:0;">

            <div class="form-group">
              <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="title">Category Title:</label>
              <div class="col-md-5 col-sm-5 col-xs-5">
               <input type="text" class="form-control" id="title" name="title" placeholder="Category Title" />
             </div>
           </div>

           <div class="form-group">
            <div class="col-sm-9 col-sm-offset-5 col-xs-offset-5">
             <button type="submit" class="btn btn-primary" name="add" value="Add">Add Category</button>
           </div>
         </div>
       </div>
     </form>
    </div>
   </div>
 </div>



    <div class="postcontent">
     <div class="loginerror">
       <?php 
       if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value) {
          if ($value == 'complete') {
            echo"<div class='alert alert-success' role='alert' style='height:100px;'>
            <a class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'></span></a>
            <strong>Success!</strong> You have been signed up successfully!
          </div>";
        }else{
          echo"<div class='alert alert-danger' style='height:100px;background-color:white;border:none;margin-bottom:-80px; box-shadow: -5px -5px 5px grey;'>
          <a class='close' id='msgclose' data-dismiss='alert' aria-label='close'></a>
          <b style='color:red;'>Email and password do not match.Try Again..</b>
        </div>";
      }
    }
  }else{
    echo "<div class='exist' value=''></div>";
  }
  ?>
</div>

<div class="logincontent">
 <div class="row"><center><h2 style="margin-bottom:20px;font-weight:bold;">Login Form</h2></center></div>
 <div class="row">

  <form id="loginform" method="post" class="form-horizontal" action="<?php echo BASE_URL;?>/Login/loginAuth/">

   <div class="form-group">
    <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="email">Email:</label>
    <div class="col-md-5 col-sm-5 col-xs-5">
     <input type="text" class="form-control" id="email" name="email" placeholder="User Email" />
     <?php
     if(isset($_GET['msg'])){
       if ($value!='complete') {
         echo  "<font color='red'>Enter correct email.</font>";
       }     
     }
     
     ?>
   </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="password">Password:</label>
  <div class="col-md-5 col-sm-5 col-xs-5">
   <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
   <?php 
   if(isset($_GET['msg'])){
     if ($value!='complete') {
       echo  "<font color='red'>Enter correct password.</font>";
     }     
   }
    
  ?>
</div>
</div>

<div class="form-group">
  <div class="col-sm-9 col-sm-offset-5 col-xs-offset-5">
   <button type="submit" class="btn btn-primary" name="login" id="next" value="NEXT">NEXT</button>
 </div>
</div>

<div class="form-group">
  <div class="col-sm-9 col-sm-offset-9 col-xs-offset-7">

   <label>
    <a href="">Register Here!</a>
  </label>

</div>
</div>

</form>
</div>
</div>
</div>
<script>
  // window.setTimeout(function() {
  //   $(".alert").fadeTo(500, 0).slideUp(500, function(){
  //     $(this).remove(); 
  //   });
  // }, 4000);

  </script>
</div>
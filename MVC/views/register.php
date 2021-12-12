    <div class="postcontent">

      <div class="row"><center><h2 style="margin-bottom:20px;font-weight:bold;">Registeration Form</h2></center></div>
      <div class="row">

        <form id="signupForm" method="post" class="form-horizontal" action="<?php echo BASE_URL;?>/Register/registerationAuth/">
         <div class="form-group">
          <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="firstname">User Name:</label>
          <div class="col-md-5 col-sm-5 col-xs-5">
           <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
         </div>
       </div>

       <div class="form-group">
        <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="email">Email:</label>
        <div class="col-md-5 col-sm-5 col-xs-5">
         <input type="text" class="form-control" id="email" name="email" placeholder="Email" required/>
       </div>
     </div>

     <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="password">Password:</label>
      <div class="col-md-5 col-sm-5 col-xs-5">
       <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
     </div>
   </div>

   <div class="form-group">
    <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="confirm">Confirm password:</label>
    <div class="col-md-5 col-sm-5 col-xs-5">
     <input type="password" class="form-control" id="confirm" name="confirmpassword" placeholder="Confirm password" required/>
   </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="phno">Phone.No:</label>
  <div class="col-md-5 col-sm-5 col-xs-5">
   <input type="text" class="form-control" id="phno" name="phonenumber" autocomplete="off" placeholder="PhoneNumber" required/>
 </div>
</div>

<div class="form-group">
  <div class="col-sm-9 col-sm-offset-5 col-xs-offset-5">
   <button type="submit" class="btn btn-primary" name="register" value="NEXT">Sign Up</button>
 </div>
</div>

<div class="form-group">
  <div class="col-sm-9 col-sm-offset-9 col-xs-offset-5">

   <label>
    <a href="?usecase=<?php echo UC_USER_LOGIN;?>&action=<?php echo ACT_USER_LOGIN;?>">Login Here!</a>
  </label>

</div>
</div>

</form>
</div>
</div>

</div>
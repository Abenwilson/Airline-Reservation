<?php
include("Includes/passheader.php");
?>
<style>
  .container {
    display: grid;
    place-items: center; /* Center both horizontally and vertically */
    height: 100%; /* Full viewport height */
    width: 150%;
}
</style>
<div  class="container">
<form  style="Width:30%" class="forms-sample"  >
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form> 
                  </div>      
</div>
</div>



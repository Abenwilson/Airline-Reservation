<?php
 include("Includes/header.php");
 ?>

    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">ADD STAFF</h4>
                  <?php
                  if(isset($_POST['submit'])) 
                  {
                    $f_name = $_POST['first_name'];
                    $l_name = $_POST['last_name'];
                    $login_id = $_POST['login_id'];
                    $email = $_POST['email'];
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('record inserted successfull')</script>";
                    }
                  }

                  ?>
                  <form method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">First Name</label>
                      <input type="text" class="form-control" name="first_name" placeholder="first_name ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Last Name</label>
                      <input type="text" class="form-control" name="last_name" placeholder="last_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Login ID</label>
                      <input type="text" class="form-control" name="login_id" placeholder="login_id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="email">
                      </div>
                    <div class="form-group">
                  <input type="submit" class="add btn btn-primary"  name = "submit">
                </div>
                </form>
								</div>
							</div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Staff Details</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Staff Name</th>
                          
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        
                        <tr>
                          <td>First Staff</td>
                         
                          <td class="font-weight-medium"><div class="badge badge-danger">Delete</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php
include("Includes/footer.php");
?>
<?php
 include("Includes/header.php");
 ?>
      <div class="main-panel">
        <div class="content-wrapper">
          
          
          <div class="row">
            
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Category</h4>

               <?php
               if(isset($_POST["submit"]))
               {
                  $catname =$_POST["catname"];
                  $details =$_POST["details"];
                  $rate =$_POST["rate"];
                  $sql ="INSERT INTO category (cat_name,details,rate)VALUES('$catname','$details','$rate')";
                  $result=mysqli_query($conn,$sql);
               }

              ?>
                  <form method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category name</label>
                      <input type="text" class="form-control" name="catname" placeholder="Enter name ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Details</label>
                      <input type="text" class="form-control" name="details" placeholder="Enter detail">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Rate</label>
                      <input type="text" class="form-control" name="rate" placeholder="Enter category">
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
                  <p class="card-title mb-0"></p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Category name</th>
                          <th>Details</th>
                          <th>Rate</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php
                        $sqls = "SELECT * FROM category";
                        $results = mysqli_query($conn, $sqls);
                        while($data=mysqli_fetch_assoc($results))
                        {
                          ?>
                          <tr>
                            <th><?php echo $data['cat_name'];?></th>
                            <th><?php echo $data['details'];?></th>
                            <th><?php echo $data['rate'];?></th>
                            <th  class="font-weight-medium">
                              <div class="badge badge-danger">                    
                         </div>
                           </th>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>                          
                        </tr>  
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
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
									<h4 class="card-title">Add Booking</h4>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Flight</label>
                      <input type="text" class="form-control" id="flight" placeholder="flight">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Details</label>
                      <textarea class="form-control" id="flight"></textarea>
                    </div>
                    <div class="form-group  ">
                  
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
								</div>
							</div>
            </div>
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Booking</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Flight Name</th>
                          
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        
                        <tr>
                          <td>First Flight</td>
                         
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
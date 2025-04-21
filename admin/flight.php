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
									<h4 class="card-title">Add Flight</h4>
                  <?php
                  if(isset($_POST['submit']))
                  {
                    $flight_number = $_POST['flight_number'];
                    $dep_loc = $_POST['departure_location'];
                    $arr_loc = $_POST['arrival_location'];
                    $dep_time = $_POST['departure_time'];
                    $arr_time = $_POST['arrival_time'];
                    $av_seat = $_POST['available_seat'];
                    $total_seat = $_POST['total_seat'];
                    $tic_price = $_POST['ticket_price'];
                    $sql= " INSERT INTO flight(flight_number,departure_location,arrival_location,departure_time,arrival_time,available_seats,total_seats,ticket_price)
                    VALUES('$flight_number','$dep_loc','$arr_loc','$dep_time','$arr_time','$av_seat','$total_seat','$tic_price')"; 
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('record inserted successfull')</script>";
                    }
                  }
                  ?>
                  <form method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Flight Number</label>
                      <input type="text" class="form-control" name="flight_number" placeholder="Enter flight number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Departure Location</label>
                      <input type="text" class="form-control" name="departure_location" placeholder="departure location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Arrival Location</label>
                      <input type="text" class="form-control" name="arrival_location" placeholder="arrival location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Departure Time</label>
                      <input type="text" class="form-control" name="departure_time" placeholder="departure_time">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Arrival Time</label>
                      <input type="text" class="form-control" name="arrival_time" placeholder="arrival_time">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Available Seat</label>
                      <input type="text" class="form-control" name="available_seat" placeholder="available_seat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Total Seat</label>
                      <input type="text" class="form-control" name="total_seat" placeholder="total_seat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Ticket Price</label>
                      <input type="text" class="form-control" name="ticket_price" placeholder="ticket_price">
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
                  <p class="card-title mb-0">Top Products</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Flight Name</th>
                          
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                      <?php
                        $sqls = "SELECT * FROM flight";
                        $results = mysqli_query($conn, $sqls);
                        while($data=mysqli_fetch_assoc($results))
                        {
                          ?>
                          <tr>
                            <th><?php echo $data['flight_number'];?></th>
                            <th><?php echo $data['departure_location'];?></th>
                            <th><?php echo $data['arrival_location'];?></th>
                            <th><?php echo $data['departure_time'];?></th>
                            <th><?php echo $data['arrival_time'];?></th>
                            <th><?php echo $data['available_seats'];?></th> 
                            <th><?php echo $data['total_seats'];?></th>
                            <th><?php echo $data['ticket_price'];?></th>
                            <th  class="font-weight-medium">
                              <div class="badge badge-danger">delete               
                               </div>
                           </th>
                          </tr>
                          <?php
                        }
                        ?>
                        
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
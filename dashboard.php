<?php include('includes/header.php'); ?>
<?php include('includes/connection.php'); ?>
<!--  Header End -->
<div class="container-fluid mx-auto w-100">
  <!--  Start code from here no need to close the above div -->
  <?php
   $sql = "SELECT * FROM `clients`";
   $sqlq = mysqli_query($conn,$sql);
   $sqlqr = mysqli_num_rows($sqlq);
  ?>
  <div>
    <div class="row">
      <div class="col-4">
        <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total users</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?=$sqlqr?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">Joined this month</h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <?php
                            $sql="SELECT * FROM clients WHERE MONTH(added_on) = 5;";
                            $sqlq = mysqli_query($conn,$sql);
                            $sqlru = mysqli_num_rows($sqlq);
                    
                          ?>
                          <h4 class="fw-semibold mb-3"><?=$sqlru?></h4>
                          <div class="d-flex align-items-center mb-3">
                            <span
                              class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                              <i class="ti ti-arrow-up-left text-success"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                            <p class="fs-3 mb-0">last year</p>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="me-4">
                              <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                              <span class="fs-2">2023</span>
                            </div>
                            <div>
                              <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                              <span class="fs-2">2023</span>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
        </div>
      </div>
      <div class="col-4">
        <a href="view-expired.php"><div class="card overflow-hidden">
                    <?php
                      $sql  = "SELECT * FROM clients WHERE end_date < CURDATE()";
                      $sqlq =  mysqli_query($conn,$sql);
                      $rows = mysqli_num_rows($sqlq);


                    ?>
                      <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Memberships Expired</h5>
                        <div class="row align-items-center">
                          <div class="col-8">
                            <h4 class="fw-semibold mb-3"><?=$rows?></h4>
                            <div class="d-flex align-items-center mb-3">
                              <span
                                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                <i class="ti ti-arrow-up-left text-success"></i>
                              </span>
                              <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                              <p class="fs-3 mb-0">last year</p>
                            </div>
                            <div class="d-flex align-items-center">
                              <div class="me-4">
                                <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                <span class="fs-2">2023</span>
                              </div>
                              <div>
                                <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                <span class="fs-2">2023</span>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
        </div>
      </div>

    </div>
  </div>
  <div>
    <div class="h1 mb-3">Clients</div>
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">Membership No.</th>
          <th scope="col">Name</th>
         
          
          <th scope="col">Contact</th>
          <th scope="col">Weight</th>
          <th scope="col">Height</th>
          <th scope="col">Package</th>
          
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Fee</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `clients`";
          $sqlq = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($sqlq)):
        ?>
        <tr>
          <td><?php echo $row['membership_number']; ?></td>
          <td><?php echo $row['name']; ?></td>
        
          
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['body_weight']; ?></td>
          <td><?php echo $row['height']; ?></td>
          <td><?php echo $row['package_type']; ?></td>
          
          <td><?php echo $row['start_date']; ?></td>
          <td><?php echo $row['end_date']; ?></td>
          <td><?php echo $row['fee']; ?></td>
          <td>
            <div class="d-flex">
              <a href="edit-client.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Edit</button></a>
              <a href="edit-client.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger ms-1">Delete</button></a>
            </div>
            
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>



<?php include('includes/footer.php'); ?>

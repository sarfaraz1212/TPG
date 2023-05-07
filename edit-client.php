<?php include('includes/header.php')?>
<?php include('includes/connection.php')?>
      <!--  Header End -->
      <?php 
        $id = $_GET['id'];
        echo $sql ="SELECT * FROM `clients` WHERE `id` =  '$id' ";
        $sqlq = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($sqlq);

        $name = $row['name'];
        $email = $row['email'];
        $gender = $row['gender'];
        
        $goal = $row['goal'];
        $goal_array = explode(',', $goal);


        $startdate = $row['start_date'];
        $enddate = $row['end_date'];
        $height = $row['height'];
        $bodyweight = $row['body_weight'];
        $fee = $row['fee'];
        $mnum = $row['membership_number'];
        $contact = $row['contact'];

        $package = $row['package_type'];
        $package_array = str_split($package, 1); 


      ?>

      <div class="container-fluid mx-auto w-100">
        <!--  Start code from here no need to close the above div -->
        <h2>About Client</h2>
        <div>
        <table class="table table-light table-striped">
          <thead>
            <tr>
              <th scope="col">Membership No.</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
            
              
              <th scope="col">Contact</th>
              <th scope="col">Weight</th>
              <th scope="col">Height</th>
              <th scope="col">Goal</th>
              <th scope="col">Package</th>
              
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Fee</th>
              
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><?php echo $mnum; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $gender; ?></td>
              <td><?php echo $email; ?></td>
            
              
              <td><?php echo $contact; ?></td>
              <td><?php echo $bodyweight; ?></td>
              <td><?php echo $height; ?></td>
              <td><?php echo $goal; ?></td>
              <td><?php echo $package; ?></td>
              
              <td><?php echo $startdate; ?></td>
              <td><?php echo $enddate; ?></td>
              <td><?php echo $fee;?></td>
            </tr>
            
          </tbody>
        </table>

        </div>
        <div class="container-fluid mx-auto w-100">
          <h2>Edit Client<h2>
          <form class="form-control mt-2" id="updateclientform" method="POST">
            <div class="row">                        
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="Name" class="form-label">Name:</label>
                  <input type="text" class="form-control" id="name"  placeholder="" name="upname" value="<?php echo $name?>">
                </div>   
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="" name="upemail" value="<?php echo $email?>">
                </div>  
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="start-date" class="form-label">Start Date</label>
                  <input type="date" class="form-control" id="start-date" name="upstartdate" value="<?php echo $startdate?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="end-date" class="form-label">End Date</label>
                  <input type="date" class="form-control" id="end-date" name="upenddate" value="<?php echo $enddate?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="bodyweight" class="form-label">Body Weight</label>
                  <input type="text" class="form-control" id="bodyweight" name="upbodyweight" value="<?php echo $bodyweight?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="height" class="form-label">Height</label>
                  <input type="text" class="form-control" id="height" name="upheight" value="<?php echo $height?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="mnum" class="form-label">Membership Number</label>
                  <input type="text" class="form-control" id="mnum" name="upmnum" value="<?php echo $mnum?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="fee" class="form-label">Fee paid</label>
                  <input type="text" class="form-control" id="fee" name="upfee" value="<?php echo $fee?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="contact" class="form-label">Contact</label>
                  <input type="text" class="form-control"  value="<?php echo $contact?>"id="contact" name="upcontact">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <fieldset class="form-group">
                  <legend>Package</legend>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="uppackage[]" id="gymPackage" value="G" <?php if (in_array('G', $package_array)) { echo 'checked'; } ?>/>
                    <label class="form-check-label" for="gymPackage">Gym</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="uppackage[]" id="cardioPackage" value="C" <?php if (in_array('C', $package_array)) { echo 'checked'; } ?>/>
                    <label class="form-check-label" for="cardioPackage">Cardio</label>
                  </div>
                </fieldset>
              </div>

              <div class="col-6">
                <fieldset class="form-group">
                  <legend>Goal</legend>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="upgoal[]" id="muscleGain" value="MG" <?php if (in_array('MG', $goal_array)) { echo 'checked'; } ?>/>
                    <label class="form-check-label" for="muscleGain">Muscle Gain</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="upgoal[]" id="fatLoss" value="FL" <?php if (in_array('FL', $goal_array)) { echo 'checked'; } ?> />
                    <label class="form-check-label" for="fatLoss">Fat Loss</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="upgoal[]" id="generalFitness" value="GF" <?php if (in_array('GF', $goal_array)) { echo 'checked'; } ?> />
                    <label class="form-check-label" for="generalFitness">General Fitness</label>
                  </div>
                </fieldset>
              </div>

              <div class="col-12 ">
                <fieldset class="form-group">
                  <legend>Gender</legend>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="upgender" id="male" value="M" <?php if($gender == "M") {echo "checked";}?> />
                    <label class="form-check-label" for="male">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="upgender" id="female" value="F" <?php if($gender == "F") {echo "checked";}?> />
                    <label class="form-check-label" for="female">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="upgender" id="other" value="O" <?php if($gender == "O") {echo "checked";}?> />
                    <label class="form-check-label" for="other">Other</label>
                  </div>
                </fieldset>
              </div>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="upid">

            <div class="row">
              <div class="col-12">
                <div class="form-group mt-3">
                  <button type="submit" class="btn bg-primary btn-lg w-100 text-white">Submit</button>
                </div>
            </div>
                                
          </form>
        </div>
                
<?php include('includes/footer.php')?>
      
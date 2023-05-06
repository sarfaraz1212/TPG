<?php include('includes/header.php')?>
      <!--  Header End -->
      <div class="container-fluid mx-auto w-75">
        <!--  Start code from here no need to close the above div -->
        <h2>Add Client<h2>
        <form class="form-control mt-2" id="addclientform" method="POST">
          <div class="row">                        
            <div class="col-md-6">
              <div class="mb-3">
                <label for="Name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name"  placeholder="" name="name">
              </div>   
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="start-date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start-date" name="startdate">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label for="end-date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end-date" name="enddate">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="bodyweight" class="form-label">Body Weight</label>
                <input type="text" class="form-control" id="bodyweight" name="bodyweight">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="text" class="form-control" id="height" name="height">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="mnum" class="form-label">Membership Number</label>
                <input type="text" class="form-control" id="mnum" name="mnum">
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label for="contact" class="form-label">Fee paid</label>
                <input type="text" class="form-control" id="fee" name="fee">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="mnum" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <fieldset class="form-group">
                <legend>Package</legend>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="package[]" id="gymPackage" value="G" />
                  <label class="form-check-label" for="gymPackage">Gym</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="package[]" id="cardioPackage" value="C" />
                  <label class="form-check-label" for="cardioPackage">Cardio</label>
                </div>
              </fieldset>
            </div>

            <div class="col-6">
              <fieldset class="form-group">
                <legend>Goal</legend>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="goal[]" id="muscleGain" value="MG" />
                  <label class="form-check-label" for="muscleGain">Muscle Gain</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="goal[]" id="fatLoss" value="FL" />
                  <label class="form-check-label" for="fatLoss">Fat Loss</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="goal[]" id="generalFitness" value="GF" />
                  <label class="form-check-label" for="generalFitness">General Fitness</label>
                </div>
              </fieldset>
            </div>

            <div class="col-12 ">
              <fieldset class="form-group">
                <legend>Gender</legend>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="M" />
                  <label class="form-check-label" for="male">Male</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="F" />
                  <label class="form-check-label" for="female">Female</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="other" value="O" />
                  <label class="form-check-label" for="other">Other</label>
                </div>
              </fieldset>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="form-group mt-3">
                <button type="submit" class="btn bg-primary btn-lg w-100 text-white">Submit</button>
              </div>
          </div>
                               
        </form>        
<?php include('includes/footer.php')?>
      
        
        
        
        
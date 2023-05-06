<?php include('includes/header.php'); ?>
<?php include('includes/connection.php'); ?>
<!--  Header End -->
<div class="container-fluid mx-auto w-100">
  <!--  Start code from here no need to close the above div -->
  <div>
    <div class="h1 mb-3">Clients</div>
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
          <th scope="col">Package</th>
          <th scope="col">Goal</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Fee</th>
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
          <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['body_weight']; ?></td>
          <td><?php echo $row['height']; ?></td>
          <td><?php echo $row['package_type']; ?></td>
          <td><?php echo $row['goal']; ?></td>
          <td><?php echo $row['start_date']; ?></td>
          <td><?php echo $row['end_date']; ?></td>
          <td><?php echo $row['fee']; ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
<?php include('includes/footer.php'); ?>

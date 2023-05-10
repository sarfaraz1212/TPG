<?php 
include('includes/header.php');
include('includes/connection.php');
?>
      <!--  Header End -->
      <div class="container-fluid mx-auto w-75">
        <!--  Start code from here no need to close the above div -->
        <div>
    <div class="h1 mb-3">Clients</div>
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">Membership No.</th>
          <th scope="col">Name</th>
          <th scope="col">Package</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Fee</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sql  = "SELECT * FROM `clients` WHERE end_date < CURDATE()";
            $sqlq =  mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($sqlq))
            {
        ?>
            <tr>
                <td><?php echo $row['membership_number']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['package_type']?></td>
                <td><?php echo $row['start_date']?></td>
                <td><?php echo $row['end_date']?></td>
                <td><?php echo $row['fee']?></td>
                <td></td>
            </tr>
        <?php 
            } 
        ?>
      </tbody>
    </table>
  </div>
                
<?php include('includes/footer.php')?>
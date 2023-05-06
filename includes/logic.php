<?php
include('connection.php');

if(isset($_POST['mnum']))
{
    $mnum = $_POST['mnum'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $bodyweight = $_POST['bodyweight'];
    $height = $_POST['height'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $fee = $_POST['fee'];

    $packag = $_POST['package'];
    $package = implode(",", $packag);
    
    $goa = $_POST['goal'];
    $goal = implode(" | ", $goa);


    $sql = "INSERT INTO `clients`(`membership_number`, `name`, `email`, `contact`, `start_date`, `end_date`, `body_weight`, `height`, `fee`, `package_type`, `goal`, `gender`, `added_on`) 
            VALUES ('$mnum','$name','$email','$contact','$startdate','$enddate','$bodyweight','$height','$fee','$package','$goal','$gender', NOW())";

    $feedback = array();
    
    if(mysqli_query($conn, $sql))
    {
        $feedback['status'] = 'success';
    }
    else
    {
        $feedback['status'] = 'error';
        $feedback['error_msg'] = mysqli_error($conn);
    }

    echo json_encode($feedback);
}
else
{
    echo "Error: Invalid request.";
}
?>

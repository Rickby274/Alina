<?php

if (isset($_POST['submit'])) {
	
    include_once 'dbh.inc.php';

    $user_uid = mysqli_real_escape_string($conn, $_POST['username']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    
    //Error handlers
    //Check for empty fields
    if (empty($user_uid) || empty($service) || empty($time) || empty($status)) {
    	header("Location: ../booking.php?form=empty");
    	exit();
    } else {
        // check if input are valid
          if (!preg_match("/^[a-zA-Z]*$/",$user_uid) || !preg_match("/^[a-zA-z]*$/"), $service) {
              header("Location: ../booking.php?form=invalid");
        exit();
          } else {
    				$sql = "INSERT INTO timetable (user_uid, service_name, date_time, status) VALUES ('$user_uid', '$service', '$time', '$status')";
    				mysqli_query($conn,$sql);
    				header("Location: ../booking.php?signup=success");
    		        exit();
    			} 
            }
    } else {
	header("Location: ../booking.php");
	exit();
}
?>
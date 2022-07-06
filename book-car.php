<?php

    require 'init.php';
    include('res_handler.php');

    $status = false;
    $response = 'Request failed!';


    $booked_user_id = $_GET['booked_user_id'];
    $car_id = $_GET['car_id'];
    $date = $_GET['date'];
    $amount = $_GET['amount'];
    $day = $_GET['day'];
    $owner_id = $_GET['owner_id'];

    $query = "INSERT INTO `booking`(`id`, `booked_user_id`, `car_id`, `date`, `amount`, `day`, `owner_id`, `payment_status`, `booking_status`, `latitude`, `longitude`) VALUES (NULL,'$booked_user_id','$car_id','$date','$amount','$day','$owner_id','0','1','0','0')";
    
    $result  = mysqli_query($con, $query);
    
    $status = true;
    send_response($status, $result, true);
?>
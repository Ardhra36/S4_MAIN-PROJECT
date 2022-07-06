<?php

    require 'init.php';
    include('res_handler.php');

    $status = false;
    $response = 'Request failed!';
    
    $booking_id = $_GET['booking_id'];
    $status = $_GET['status'];

    $query = "UPDATE `booking` SET `booking_status` = '$status' WHERE `booking`.`id` = $booking_id";

    $result  = mysqli_query($con, $query);
    
    $status = true;
    send_response($status, true, $result);
?>
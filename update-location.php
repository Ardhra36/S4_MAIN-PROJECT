<?php

    require 'init.php';
    include('res_handler.php');

    $status = false;
    $response = 'Request failed!';
    
    $booking_id = $_GET['booking_id'];
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];

    $query = "UPDATE `booking` SET `latitude` = '$latitude', `longitude` = '$longitude' WHERE `booking`.`id` = $booking_id";

    $result  = mysqli_query($con, $query);
    
    $status = true;
    send_response($status, true, $result);
?>
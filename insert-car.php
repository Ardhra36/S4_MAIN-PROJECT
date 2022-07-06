<?php

    require 'init.php';
    include('res_handler.php');

    $status = false;
    $response = 'Request failed!';

    $name = $_GET['name'];
    $image = $_GET['image'];
    $description = $_GET['description'];
    $color = $_GET['color'];
    $number = $_GET['number'];
    $model = $_GET['model'];
    $user_id = $_GET['user_id'];
    $rent_per_day = $_GET['rent_per_day'];
    $type = $_GET['type'];

    $query = "INSERT INTO `car`(`id`, `name`, `image`, `description`, `model`, `color`, `number`, `user_id`, `rent_per_day`, `type`) VALUES (NULL,'$name','$image','$description','$model','$color','$number','$user_id','$rent_per_day','$type')";
    
    $result  = mysqli_query($con, $query);
    
    $status = true;
    send_response($status, $result, true);
?>
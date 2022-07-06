<?php

    require 'init.php';
    include('res_handler.php');

    $status = false;
    $response = 'Request failed!';

    $email = $_GET['email'];
    $password = $_GET['password'];
    $name = $_GET['name'];
    $xpub = $_GET['xpub'];
    $mnemonic = $_GET['mnemonic'];
    $priv_key = $_GET['priv_key'];
    $address = $_GET['address'];

    $query = "INSERT INTO `user` (`id`, `email`, `password`, `name`, `xpub`, `mnemonic`, `priv_key`, `address`) VALUES (NULL, '$email', '$password', '$name', '$xpub', '$mnemonic', '$priv_key', '$address')";
    
    $result  = mysqli_query($con, $query);
    
    $status = true;
    send_response($status, $result, true);
?>
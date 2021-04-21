<?php

require 'includes/functions.php';

$id = $_POST['id'];

$result = get_product_by_id($id);

$product = mysqli_fetch_array($result);

$_SESSION['products_'.$product['product_id']] = array(

    'id'=> $product['product_id'],
    'titre'=>$product['product_title'],
    'total'=>$product['product_price'],
);

$_SESSION['totals'] += $_SESSION['products_'.$product['product_price'] ['total']];
$_SESSION['count'] += 1;
header("Location:cart.php"); 


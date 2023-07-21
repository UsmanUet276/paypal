<?php 
session_start();

// Include database connection file 
include_once 'dbConnect.php';

$amount = $_GET['amount'];
$item = $_GET['item'];
$status = "pending";

$insert = db::insertRecord("INSERT INTO product(product_name, price, status) VALUES('".$item."','".$amount."','".$status."')");
$_SESSION['product_id'] = $insert;

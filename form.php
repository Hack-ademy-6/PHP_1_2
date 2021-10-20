<?php
session_start();

$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$img = $_POST["img"];

$product = [
   "title"=>$title,
   "description"=>$description,
   "price"=>$price,
   "img"=>$img         
];


#array_push($_SESSION["products"],$product);
$_SESSION["products"][] = $product;

header("location:index.php");
<?php
include 'config.php';

$productname = $_POST['productname'];
$price = $_POST['price'];
$image = $_FILES['image'];

$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];

$image_des = "image/".$imageName;

move_uploaded_file($imageLocation,$image_des);

$insertQurey = "INSERT INTO `product`(`product_name`, `price`, `image`) VALUES ('$productname','$price','$image_des')";

if(mysqli_query($conn, $insertQurey)){
    echo "<script>alert('Product Inserted')</script>";
    echo "<script>location.href='homepage.php'</script>";
}



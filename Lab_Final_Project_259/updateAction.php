<?php
include 'config.php';

$id = $_POST['id'];
$productname = $_POST['productname'];
$price = $_POST['price'];
$image = $_FILES['image'];


$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];

$image_des = "image/" . $imageName;

move_uploaded_file($imageLocation, $image_des);

$updateQurey = "UPDATE `product` SET `product_name`='$productname',`price`='$price',`image`='$image_des' WHERE Id = '$id'";

if (mysqli_query($conn, $updateQurey)) {
    echo "<script>alert('Product Updated')</script>";
    echo "<script>location.href='homepage.php'</script>";
}
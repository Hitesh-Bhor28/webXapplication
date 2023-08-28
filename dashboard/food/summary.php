<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
}



require 'config.php';


$oid = $_POST['oid'];
$total = $_POST['price'];


$cartImagesNames = $_POST['cartImagesNames'];
$serializedArray = json_encode($cartImagesNames);
$cleanedArray = str_replace('\\/', '/', $serializedArray);

$cartrawdetails = $_POST['cartIdetails'];
$cartdetail = json_encode($cartrawdetails);
$cartdetails = str_replace('\\/', '/', $cartdetail);




$query = "INSERT INTO orders (cid,orderid,total,images_names,images_details) VALUES ('$userId','$oid','$total','$cleanedArray','$cartdetails')";


$result = mysqli_query($conn, $query);

if ($result) {
    echo "cS";
} else {
    echo "Error: " . mysqli_error($conn);
}









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="continue">
    <a id="txt" href="../dashboard.php">Continue Shopping</a>
</div>


</body>
</html>
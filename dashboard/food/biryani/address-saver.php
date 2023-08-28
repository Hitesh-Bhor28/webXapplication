<?php
// echo $name, $lastname ,$address ,$countrySelect ,$state, $city, $zipcode;
$server = "localhost";
$username = "root";
$password = "";
$db = "userregistration";


//Database Connection
$conn = mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        echo "not connected";
    }


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$country = $_POST['countrySelect'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

/*<?php echo ($apikey*100); ?>*/

// Insert data into the database
$sql = "INSERT INTO addresses (name, lastname, address, country, state, city, zipcode) VALUES ('$name', '$lastname', '$address', '$country' , '$state', '$city', '$zipcode')";

if ($conn->query($sql) === TRUE) {
    // echo "Address inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>







<div class="pay">
<!-- after address tick -->
<?php

    $apikey = "rzp_test_rGijuZptM4bTSD";


?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="" method="post">
<script 
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>"
    data-amount="3000"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="DelightfulDishes"
    data-description="A discrip of this page"
    data-image="https://emample.com"
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

</div>



</body>
</html>


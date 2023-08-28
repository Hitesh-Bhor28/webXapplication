<?php
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Track Your Order</title>
    <link rel="stylesheet" href="../css/status.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


        <div class="container px-1 px-md-4 py-5 mx-auto">
            <div class="card">
                <div class="row d-flex justify-content-between px-3 top">
                    <div class="d-flex">
                        <h5>ORDER <span class="text-primary font-weight-bold"><?php echo $order_id;?></span></h5>
                    </div>
                    <div class="d-flex flex-column text-sm-right">
                        <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                        <p>TXN-ID <span class="font-weight-bold"><?php echo rand(10000,1000000);?></span></p>
                    </div>
                </div>
                <!-- Add class 'active' to progress -->
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="step0"></li>
                        <li class="step0"></li>
                    </ul>
                    </div>
                </div>
                <div class="row justify-content-between top">
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Processed</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Shipped</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>In transit</p>
                        </div>
                    </div>
                    <div class="row d-flex icon-content">
                        <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">Order<br>Arrived</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>
<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
    $userId = $_SESSION['id'];

    // echo "Welcome, $username (User ID: $userId)";
} else {
    echo "Session data not found.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/asider.css">
</head>
<body class="">

<div class="navbar">
    <nav id="navbar">
            <div id="logo">
                <img src="../img/logoBG.png" alt="logo.png" srcset="">
            </div>
            
            <ul>
                <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/">Home</a></li>
                <li class="nav-text"><a href="#">Menu</a></li>
                <li class="nav-text"><a href="#O-form">Order</a></li>
                <li class="nav-text"><a href="#">Contact-Us</a></li>
            </ul>
            <ul> 
                <li class="right-side">
                    <header>
                    <div class="shopping">
                        <img src="image/shopping.svg">
                        <span class="quantity">0</span>
                    </div>
                </header>
                </li>
                <li class="right-side">
                    <div class="dropdown">
                        <button class="dropbtn">Account</button>
                            <div class="dropdown-content">
                                <a href="#">Profile</a>
                                <a href="#">Settings</a>
                                <a href="logout.php">Logout</a>
                            </div>
                    </div>
                </li>
                
            </ul>
    </nav>
</div>



    <div class="container">
        <header></header>


        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h3>CHECKOUT</h3>
        <h4>Rs.</h4>
        <h1>Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">    
            <div onclick="redirecto()" class='total' id='tbox' >0</div>
            <div class="closeShopping" id="lbox" >Close</div>
        </div>
    </div>



<div class="aside-left">
        <div class="aside-left-content" id="asdf">
            <ul>
                <li class="nav-text-left"><a href="#">Home</a></li>
                <li class="nav-text-left"><a href="#">Wishlist</a></li>
                <li class="nav-text-left"><a href="Orders/">Your Orders</a></li>
                <li class="nav-text-left"><a href="#">Help</a></li>
            </ul>
        </div>
</div>



<div class="aside-right">
    <div class="aside-right-content"  id="arc">
        <ul>

            <hr class="line">
            <div id="goforhunt">Go For Hunt</div>

            <div class="right-menu">
                <div class="menu-first">
                    <a href="food/paneer/paneer.php"><img id="img-dish-paneer" alt="Pizza" src="food/paneer/image/paneer.png"></a>
                </div>
                <a href="food/paneer/paneer.php"><h5 id="panner">Paneer</h5></a>

                <div class="menu-first">
                    <a href="food/biryani/biryani.php"><img id="img-dish-biryani" alt="Pizza" src="food/biryani/image/biryani1.png"></a>
                </div>
                <a href="food/biryani/biryani.php" id="biryani"><h5>Biryani</h5></a>

                <div class="menu-first">
                    <a href="food/chicken/chicken.php"><img id="img-dish-chicken" alt="Pizza" src="food/chicken/image/chicken.png"></a>
                </div>
                <a href="food/chicken/chicken.php"><h5 id="chicken">Chicken</h5></a>
                
                <div class="menu-first">
                <a href="food/vegi/vegi.php"><img id="img-dish-vegi" alt="Pizza" src="food/vegi/image/vegi.png"></a>
                </div>
                <a href="food/vegi/vegi.php"><h5 id="vegi">Vegetable</h5></a>
                
                <div class="menu-first">
                    <a href="food/chinese/chinese.php"><img id="img-dish-chinese" alt="Pizza" src="food/chinese/image/chinese.png"></a>
                </div>
                <a href="food/chinese/chinese.php"><h5 id="chinese">Chinese</h5></a>
               
                <div class="menu-first">
                    <a href="food/sindia/sindia.php"><img id="img-dish-sindia" alt="Pizza" src="food/sindia/image/sindia.png"></a>
                </div>
                <a href="food/sindia/sindia.php"><h5 id="sindia">South-Indian</h5></a>
            
            </div>
           
        </ul>
    </div>
</div>





<div class="last">
        <p id="foot">
                This is Footer and Last section.
        </p>
    </div>


</body>
<script src="js/app.js"></script>
</html>
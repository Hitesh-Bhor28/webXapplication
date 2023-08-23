<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/asider.css">
</head>
<body class="">

<div class="navbar">
    <nav id="navbar">
            <div id="logo">
                <img src="../../image/logoBG.png" alt="logo.png" srcset="">
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
                                <a href="../../logout.php">Logout</a>
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
                <li class="nav-text-left"><a href="#">Your Orders</a></li>
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
                    <a href="../biryani/biryani.php"><img id="img-dish-biryani" alt="biryani" src="../biryani/image/biryani1.png"></a>
                </div>
                <a href="../biryani/biryani.php" id="biryani"><h5>Biryani</h5></a>

                <div class="menu-first">
                    <a href="../chicken/chicken.php"><img id="img-dish-chicken" alt="chicken" src="../chicken/image/chicken.png"></a>
                </div>
                <a href="../chicken/chicken.php"><h5 id="chicken">Chicken</h5></a>
                
                <div class="menu-first">
                    <a href="../paneer/paneer.php"><img id="img-dish-paneer" alt="Pizza" src="../paneer/image/paneer.png"></a>
                </div>
                <a href="../paneer/paneer.php"><h5 id="panner">Paneer</h5></a>
                
                <div class="menu-first">
                <a href="../vegi/vegi.php"><img id="img-dish-vegi" alt="Pizza" src="../vegi/image/vegi.png"></a>
                </div>
                <a href="../vegi/vegi.php"><h5 id="vegi">Vegetable</h5></a>
                
                <div class="menu-first">
                    <a href="../chinese/chinese.php"><img id="img-dish-chinese" alt="Pizza" src="../chinese/image/chinese.png"></a>
                </div>
                <a href="../chinese/chinese.php"><h5 id="chinese">Chinese</h5></a>
               
                <div class="menu-first">
                    <a href="../sindia/sindia.php"><img id="img-dish-sindia" alt="Pizza" src="../sindia/image/sindia.png"></a>
                </div>
                <a href="../sindia/sindia.php"><h5 id="sindia">South-Indian</h5></a>
            
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
<script src="../../js/app.js"></script>
</html>
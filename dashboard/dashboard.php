<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
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
                <li class="right-side" id="hiden"><a href="logout.php">Logout</a></li>
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
        <header>
            <h1>Your Shopping Cart</h1>
            <div class="shopping">
                <img src="image/shopping.svg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <div class="last">
            <p id="foot">
                    This is Footer and Last section.
            </p>
        </div>
    <script src="js/app.js"></script>
</body>
</html>
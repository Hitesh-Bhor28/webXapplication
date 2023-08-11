<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/laptop1.css">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <script src="js/default_img.js"></script> -->
    
</head>
<body>

<div id="preloader"></div>
    
    <nav id="navbar">
        <div id="logo">
            <img src="img/logoBG.png" alt="logo.png" srcset="">
        </div>
        
        <ul>
            <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/">Home</a></li>
            <li class="nav-text"><a href="http://localhost/FoodDeliveryProject/dashboard/dashboard.php">Menu</a></li>
            <li class="nav-text"><a href="#O-form">Order</a></li>
            <li class="nav-text"><a href="#">Contact-Us</a></li>
        </ul>
    </nav>
    
    <section id="home">
        <h1 id="main-heading">India's Best Food Delivery Website</h1>
        <p id="paragraph">Welcome to DelightfulDishes.com! Indulge your taste buds with our exquisite collection of mouthwatering recipes from around the world. From savory starters to delectable desserts, our culinary experts have crafted each dish to perfection. Whether you're a seasoned chef or a cooking novice, our easy-to-follow recipes will inspire and satisfy your cravings. Join our vibrant community of food enthusiasts, share your creations, and discover new flavors to tantalize your senses. Get ready for a delightful gastronomic journey like no other!</p>
        <div id="hide"></div>
        <button id="btn"><a href="#our-service">Order Now</a></button>
        <h1 class="h-primary center" id="our-service">Our Trending items</h1>
    </section>
    
    <section class="services-container">
        <div id="services">
            <div class="box">
                <!-- https://source.unsplash.com/random/?Pizza/1080x675" -->
                <!-- img/pizza.jpg -->
                <a href="login-main/login.php"><img id="imagep" alt="Pizza" src="img/pizza.jpg"></a>
                <a href="login-main/login.php"><h2 class="h-secondary center whiter">PIZZA</h2></a>
                <p class="whiter">Delicious pizza's, topped with gooey cheese, savory sauce, and your favorite toppings. Pure satisfaction in every bite!</p>
            </div>
            <div class="box">
                <!-- https://source.unsplash.com/random/?Cake/1080x675 -->
                <!-- img/cake.jpg -->
                <a href="login-main/login.php"><img id="imagec" alt="Cake" src="img/cake.jpg"></a>
                    <a href="login-main/login.php"><h2 class="h-secondary center whiter">CAKES</h2></a>
                    <p class="whiter">Cakes are delightful treats enjoyed worldwide. They come in various flavors, sizes, and designs, pleasing every palate. Indulge now!</p>
                </div>
                <div class="box">
                    <!-- https://source.unsplash.com/random/?Burger/1080x675 -->
                    <!-- img/burger.jpg -->
                    <a href="login-main/login.php"><img id="imageb" alt="Burger" src="img/cake.jpg"></a>
                    <a href="login-main/login.php"><h2 class="h-secondary center whiter">BURGER</h2></a>
                    <p class="whiter">Burgers are delicious fast food items loved globally for their juicy patties, tasty toppings, and satisfying buns.</p>
                </div>
                
            </div>
        </section>

        
        <!-- <section class="signin">
            
            <div class="popup" id="zoomimg">
                <iframe src="login-main/login.php" frameborder="0"></iframe> -->
                <!-- <img id="cimg" src="img/login.jpg" alt="img"> -->
                <!-- <span id="close" onclick="back()">&times;</span>
            </div>
            
            
            
            
        </section> -->

        
        
        <section class="partners">
            <div class="order-form">
                <form name="oform" action="#" method="post">
                    <h1 class="h-primary" id="O-form">Order Form</h1><hr>
                    

                    <div class="txt"> Name </div>
                    <div class="box">
                        <input type="text" name="name" id="" placeholder="Enter Your Name">
                    </div>

                    <div class="txt"> Mobile Number </div>
                    <div class="box">
                        <input type="text" name="" id="mno" placeholder="Enter Your Number">
                    </div>

                    <div class="txt"> Address </div>
                    <div class="box">
                        <input type="textarea" name="address" id="address" row="3" col="5" placeholder="Enter Your Address">
                    </div>

                    <div class="txt"> Quantity </div>
                    <div class="box">
                        <input type="number" name="quantity" id="quantity" min="1" max="25" placeholder="Enter Quantity"> 
                    </div>

                    <div class="txt"> Total </div>
                    <div class="box">
                        <div id="total">Rs 18.00</div>
                    </div>

                    <hr>

                    <input type="reset" value="Clear" id="clear-left" class="res">
                    <input type="submit" value="Next" id="sub-right" class="sub">
                  
                </form>
            </div>
        </section>

        <div class="last">
            <p id="foot">
                    This is Footer and Last section.
            </p>
        </div>

</body>

<script type="text/javascript">
    var loader = document.getElementById("preloader");
    window.addEventListener("load",function(){
    loader.style.display = "none";
})
</script>

<!-- <script type="text/javascript">
                    
    document.querySelectorAll('#services .box').forEach(image =>{
        image.onclick = () =>{
        }
    });    
    
    var abc = document.getElementById('close');
    var ab = document.getElementById('zoomimg');
        function back(){
            ab.style.display = "none";
        }

</script> -->
</html>
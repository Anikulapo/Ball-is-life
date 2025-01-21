<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.html");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/shop.css?v=1.1">
    <link rel="icon" href="Logo_C.png">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Logo_C.png" alt="Logo" id="logo">
                <h2 class="special">Ball is Life</h2>
            </div>
            <ul class="navigate">
                <a href="Index.php">
                    <li class="links">Home</li>
                </a>
                <a href="About.php">
                    <li class="links">About Me</li>
                </a>
                <a href="Shop.php">
                    <li class="links" id="on">Shop</li>
                </a>
                <img src="images/close-svgrepo-com.svg" alt="" class="close">
            </ul>

            <img src="images/menu-svgrepo-com.svg" alt="" class="menu">
            <div class="cart-item">
                <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart" id="top">
                <span class="cart-item-count"></span>
            </div>
        </nav>
    </header>


    <div class="cart1">
        <h2 class="cart-title">Your Cart</h2>
        <div class="cart-content">
            <!-- <div class="cart-box">
                <img src="images/Basketball.jpeg" alt="" class="prod">
                <div class="cart-detail">
                    <h2 class="cart-product-title">Basketball</h2>
                    <h2 class="cart-price">$100</h2>
                    <div class="cart-quantity">
                        <button id="decrement">-</button>
                        <span class="number">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <img src="images/delete-1487-svgrepo-com.svg" alt="" class="cart-remove">

            </div> -->
        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
        </div>
        <button class="btn-buy">Buy Now</button>
        <img src="images/close-svgrepo-com.svg" alt="" id="cart-close">
    </div>


    <section class="shop">
        <h1 class="section-title">Shop Products</h1>
        <div class="product-content">
            <div class="product-box">
                <div class="img-box">
                    <img src="images/Son of flash.jpg" alt="" class="product">
                </div>
                <h2 class="product-title">Way Of Wade Son Of Flash</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $130
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>




            <div class="product-box">
                <div class="img-box">
                    <img src="images/Flash.jpg" alt="" class="product">
                </div>
                <h2 class="product-title">Way Of Wade Flashs</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $110
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>






            <div class="product-box">
                <div class="img-box">
                    <img src="images/Gt3.jpg" alt="" class="product">
                </div>
                <h2 class="product-title">Nike GT Cuts 3</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $270
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>

            <div class="product-box">
                <div class="img-box">
                    <img src="images/Short1.jpg" alt="" class="product">
                </div>
                <h2 class="product-title"> Hoop shorts</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $50
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>


            <div class="product-box">
                <div class="img-box">
                    <img src="images/shirt.jpg" alt="" class="product">
                </div>
                <h2 class="product-title"> Hoop shirts</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $50
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>


            <div class="product-box">
                <div class="img-box">
                    <img src="images/Basketball.jpeg" alt="" class="product">
                </div>
                <h2 class="product-title"> Basketball</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $100
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>


            <div class="product-box">
                <div class="img-box">
                    <img src="images/Sleeve (1).jpg" alt="" class="product">
                </div>
                <h2 class="product-title"> Basketball sleeve</h2>
                <div class="price-and-cart">
                    <span class="price">
                        $50
                    </span>
                    <img src="images/shopping-cart-svgrepo-com.svg" alt="cart" class="cart add-cart">
                </div>
            </div>


        </div>

    </section>

    <script src="script/shop.js"></script>
    <script>
            const navMenu = document.querySelector(".navigate");
    const navToggle = document.querySelector(".menu");
    const navClose = document.querySelector(".close");
    const logout =document.querySelector(".btn4")

    if (navToggle) {    
        navToggle.addEventListener("click", () => {
            navMenu.classList.add("show-menu");
            logout.classList.add("hide-btn");
        });
    }

    if (navClose) {
        navClose.addEventListener("click", () => {
            navMenu.classList.remove("show-menu");
            logout.classList.remove("hide-btn");
        });
    }
    </script>
</body>
</html>
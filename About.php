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
    <title>About Me</title>
    <link rel="stylesheet" href="css/About.css?v=1.1">
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
                    <li class="links" >Home</li>
                </a>
                <a href="About.php">
                    <li class="links" id="on">About Me</li>
                </a>
                <a href="Shop.php">
                    <li class="links">Shop</li>
                </a>
                <img src="images/close-svgrepo-com.svg" alt="" class="close">
            </ul>

            <form action="php/logout.php" method="post">
                    <button type="submit" class="btn4">Logout</button>
            </form>
            <img src="images/menu-svgrepo-com.svg" alt="" class="menu">
            
        </nav>
    </header>

    <div class="container">
        <img src="images/Some.jpg" alt="pic" class="pro">
        <div class="text">
            <h1>Hi! I'm Alasoadura Oluwatobiloba</h1>
            <p>A frontend Developer and the creator of ball is life</p>
        </div>
    </div>



    <section class="page1">
        <img src="images/Some.jpg" alt="pic" class="full">
        <div class="about">
            <h1>My Journey</h1>
            <p>It all began when I was in jss3 and my parents took me to my very first programming class and I fell in love from there. I just loved the way just typing a few word could make such beatiful and smart web apps <br>
            From then on I worked my way up from secondary school to make sure I entered a prestigeous university UI, to ensure I got the best facilities and teachers <br> and with a product idea decided to create ball is life</p>
        </div>
    </section>

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
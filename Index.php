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
    <title>Home</title>
    <link rel="stylesheet" href="Css/index.css?v=1.1">
    <link rel="icon" href="Logo_C.png">
</head>
<body>
    <div class="page1">
    <header>
        <nav>
            <div class="logo">
                <img src="Logo_C.png" alt="Logo" id="logo">
                <h2 class="special">Ball is Life</h2>
            </div>
            <ul class="navigate">
                <a href="Index.php">
                    <li class="links" id="on">Home</li>
                </a>
                <a href="About.php">
                    <li class="links">About Me</li>
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
        <div class="page1_text">
            <div class="opening">
                <h1>Welcome</h1>
                <p>To your one stop shop for all your basketball needs</p>
                <a href="#page2" class="drive">Drive In</a>
            </div>
        </div>
        
    </div>
    <section class="Page2" id="page2">
        <div class="container2">
            <div class="shop" >
                <h1>Take your Game to the next level </h1>
                <a href="Shop.php" class="btn2">View Our Products</a>
            </div>
            <img src="images/Kob.png" alt="kobe" class="kob">
        </div>

        
    </section>

    <section class="page3">
        <div class="container3">
            <div class="empty_div"></div>
            <div class="about" >
                <h1>Learn All About Me and How I got here </h1>
                <a href="About.php" class="btn3">About me</a>
            </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/stars.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="css/hamburgers.css" rel="stylesheet">
    <script src="lib/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="loading-page">
        <!-- <img src="img/fd.png" alt="logo"> -->
        <div class="loading-logo"></div>
    </div>
    <div class="background">
        <div class="background-color">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <a href="#"><li>Home</li></a>
      <a href="#"><li>About</li></a>
      <a href="#"><li>Info</li></a>
      <a href="#"><li>Contact</li></a>
      <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
    </ul>
  </div>
            <div class="burger">
                <div class="burger-stick"></div>
                <div class="burger-stick"></div>
                <div class="burger-stick"></div>
            </div>
            <div class="mobile-nav">
                <div class="mobile-nav-field">
                    <a href="index.php" class="mobile-menu-item main-btn" id="">Главная</a>
                    <a href="services.php" class="mobile-menu-item services-btn">Услуги</a>
                    <a href="portfolio.php" class="mobile-menu-item portfolio-btn">Портфолио</a>
                    <a href="guide.php" class="mobile-menu-item guide-btn">Как заказать</a>
                    <a href="faq.php" class="mobile-menu-item faq-btn">Частые вопросы</a>
                </div>
            </div>
            <div class="container">
                
        
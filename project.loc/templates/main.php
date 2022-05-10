<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/main-page.css?<?echo time();?>">
</head>

<body>
<div class="page-wrapper">
        <header>
            <nav class="main-navigation"></nav>
           <div class="main-logo">Custom Burgers</div> <!-- Лого должно быть слева + отступ слева от границы -->
           <div class="order-items">***</div> <!-- должно быть с правого края и при заказе будет отображаться сколько бургеров и тд уже в корзине-->
           <div class="border-line"></div>
           </nav>
        </header>

            <main>
                <img class="main-burg" src="/img/2.jpeg.jpg" alt=""> <!-- бургер -->
                <div class="right-menu">
                <a class="menu" href="/menu.php">MENU</a>
                <div class="circle"> <!-- Круг состоящий из двух черно-бел кругов наложен. друг на друга и такой же крест в форме плюса внутри-->
                <div class="white-circle"></div>
                <div class="black-circle"></div>
                <div class="white-vertical-line"></div>
                <div class="black-vertical-line"></div>
                <div class="white-horizontal-line"></div>
                <div class="black-horizontal-line"></div>
                </div>
                <button class="main-button">Spin & Order</button> <!-- Переход на другую страницу вместе с выводом выповшей скидки в таблицы для того что бы достать ее, возможно сделать через ссылку ?? -->
                <a class="about-us" href="">ABOUT US</a>
                </div>
            </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $descr;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
<link rel="manifest" href="images/fav/manifest.json">
<meta name="msapplication-TileColor" content="#873870">
<meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
<meta name="theme-color" content="#873870">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/slick.css"/>
  <link rel="stylesheet" type="text/css" href="plugins/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  
  <link rel="stylesheet" type="text/css" href="css/fresco.css" />


  <link rel="stylesheet" href="css/main.css?110">
   <link rel="stylesheet" href="css/play.css?2">

  <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter32346340 = new Ya.Metrika({
id:32346340,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32346340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



  <title><?php echo $title;?></title>
</head>
<body>
<div class="page-wrapper">
  <header class="header">

  <nav class="main-nav animated bounceInDown">
        <ul class="main-nav_list">
          <li><a href="http://imflorist.ru">Главная</a></li>
          <li><a href="about.php">О нас</a></li>
          <li><a href="portfolio.php">Портфолио</a></li>
          <li class="wed-item"><a class="wed-link" href="wedding.php">Свадебное оформление</a>
            <ul class="wed-services">
              <li><a href="wedding/bride-bouq.php">Букет невесты</a></li>
              <li><a href="wedding/reg-zone.php">Зона регистрации</a></li>
              <li><a href="wedding/main-table.php">Стол молодых</a></li>
              <li><a href="wedding/guest-table.php">Гостевые столы</a></li>
              <li><a href="wedding/flower-acc.php">Цветочные аксессуары</a></li>
              <li><a href="wedding/gift-bouq.php">Подарочный букет</a></li>
            </ul>
          </li>
          <li class="sub-item"><a class="sub-link" href="services.php">Услуги</a>
            <ul class="sub-services">
              <li><a href="season.php">Сезонное предложение</a></li>
              <li><a href="bouquets.php">Букеты</a></li>
              <li><a href="corporate.php">Корпоративным клиентам</a></li>
              <li><a href="handmade.php">Искусственные композиции</a></li>
              <li><a href="event.php">Оформление мероприятий</a></li>
            </ul>
          </li>
          <li><a href="http://imflorist.pifakit.ru/#!/" target="_blank">Аренда</a></li>
          <li><a href="contacts.php">Контакты</a></li>
        </ul>
      </nav>
      <nav class="mobile-nav ">
            <div class="top-panel">
              <h1><?php echo $mobile_title;?></h1>
              <a aria-label="mobile menu" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
              </a>
              <a data-href="https://www.youtube.com/watch?v=uvG7h0wjaMg&feature=youtu.be" class="call-us youtuber">
              </a>
              <a href="" class="mess-us go-feed ">
              </a>
              <a href="https://vk.com/imflorist" target="_blank" class="vk-us ">
              </a>
            </div>

              <ul class="mob-menu">
                <li><a  href="http://imflorist.ru">Главная</a></li>
                <li><a  href="about.php">О нас</a></li>
                <li><a  href="portfolio.php">Портфолио</a></li>
                <li class="hltw"><a href="wedding.php" > Свадебное оформление</a><span></span>
                <ul class="mob-wed-services">
                    <li><a href="wedding/bride-bouq.php">Букет невесты и бутоньерка</a>
                    <li><a href="wedding/reg-zone.php">Зона регистрации</a>
                    <li><a href="wedding/main-table.php">Стол молодых</a></li>
                    <li><a href="wedding/guest-table.php">Гостевые столы</a>
                    <li><a href="wedding/flower-acc.php">Цветочные аксессуары</a>
                    <li><a href="wedding/gift-bouq.php">Подарочный букет</a>
                </ul>
                </li>
                <li class="hlts"><a href="services.php" > Услуги</a><span></span><ul class="mob-services">
                    <li><a href="season.php">Сезонное предложение</a>
                    <li><a href="bouquets.php">Букеты</a></li>
                    <li><a href="corporate.php">Корпоративным клиентам</a>
                    <li><a href="handmade.php">Искусственные композиции</a>
                    <li><a href="event.php">Оформление мероприятий</a>
                </ul>
                </li>
                <li><a  href="http://imflorist.pifakit.ru/#!/" target="_blank">Аренда</a></li>
                <li><a  href="contacts.php">Контакты</a></li>



              </ul>

          </nav>


  </header>

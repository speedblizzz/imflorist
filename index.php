<?php
  $mobile_title="<img src='images/minlogo.png'>";
  $title="Я-Флорист! | Оформление свадеб, праздников, цветы и флористика в г. Пермь";
  $descr="Цветочное оформление свадеб и мероприятий, доставка букетов и цветочных композиций по г.Перми.";
  $bd_class="one-page";
    $sel_m="";
    $sel_p="";
    $sel_b="";
  include "header.php";
  include "main.php";
  include "top_arrow.php";?>

<section class="sale">
    <a href="season.php">Букет невесты в подарок!</a>
    </section>
<section class="main-slider">

  <div class="slider">
    <div class="slider-item1">
      <h1>"Я-Флорист!"</h1>
      <h3>Букеты, декор и оформление на любой вкус</h3>
    </div>
    <div class="slider-item2">
      <h1>Цветочное оформление ваших праздников</h1>
      <h3>Порадуйте себя и удивите близких</h3>
    </div>
    <div class="slider-item3">
      <h1>Идеальный образ - ваш образ</h1>
      <h3>Будьте безупречны в самый главный день своей жизни</h3>
    </div>
  </div>

</section>

 <section class="service-short">
    <!-- <section class="sale">
      <a href="season.php">Букет невесты в подарок!</a>
    </section> -->

    <div class="service-item wdng"><a href="wedding.php"><h4>Свадебное оформление</h4></a></div>
      <div class="service-item bqts"><a href="bouquets.php"><h4>Букеты</h4></a></div>
      <div class="service-item corp"><a href="corporate.php"><h4>Для корпоративных клиентов</h4></a></div>
      <div class="service-item evnts"><a href="event.php"><h4>Оформление мероприятий</h4></a></div>
</section>
  <div class="btn-block">
    <a href="services.php" class="more-service">Узнать обо всех предложениях и услугах</a>
    <a class="go-feed" href="">Оставить заявку</a>
  </div>
<section class="map">
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=oYx-qczBxtq3qzinw048h5EoWi0DcoLd&amp;width=100%25&amp;height=411&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</section>

<?php include "send-form.php"; ?>
<?php include "contacts-block.php"; ?>
<?php include "footer.php";?>
<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Услуги";
  $descr="Предоставляем различные услуги по цветочному оформлению, по изготовлению свадебных букетов, поздравительных букетов, осуществляем доставку. Работаем с корпоративными клиентами. ";
  $bd_class="one-page";
    $sel_m="";
    $sel_p="";
    $sel_b="";
  include "header.php";
  include "top_arrow.php";?>
  <section class="services">
    <div class="service-wrap">
      <div class="service-block season"><a href="season.php"><h4><span>Сезонное предложение</span></h4></a></div>
      <div class="service-block bqts"><a href="bouquets.php"><h4><span>Букеты</span></h4></a></div>
      <div class="service-block corp"><a href="corporate.php"><h4><span>Для корпоративных клиентов</span></h4></a></div>
      <div class="service-block handmd"><a href="handmade.php"><h4><span>Искусственные композиции</span></h4></a></div>
      <div class="service-block evnts"><a href="event.php"><h4><span>Оформление мероприятий</span></h4></a></div>
    </div>
  </section>
  <?php include "send-form.php"; ?>
  <?php include "contacts-block.php"; ?>
  <script>
    /*$(window).on('load', function(){
      if ($(window).width() >= '768'){
          $(window).scrollTop($('.header').height());
        }
    });*/
  </script>
  <?php include "footer.php";?>
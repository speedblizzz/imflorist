<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Заказ букетов и композиций из цветов";
  $descr="Принимаем заказы на поздравительные букеты для любимых, друзей  и коллег. Осуществляем доставку по городу.";
  $bd_class="one-page";
  $serv_head="Заказ букетов";
  $serv_descr="<p>С уверенностью заявляем – лучший подарок для девушек и женщин это – красивый букет цветов! Мы знаем, как подобрать идеальный букет под любое мероприятие! </p> <br>
      <p>На сайте представлены <a href='portfolio.php' style='color:#873870;'>примеры наших работ.</a> Заказать вы можете любой вариант букета/композиции, будь то с нашего сайта, либо с любого другого. </p> <br>
      <p>Ваши заказы принимаем в любое время, минимум за 24 часа до готовности. </p> <br>
      ";
  $serv_descr2="
  <p>Ваши заказы принимаем в любое время, минимум за 24 часа до готовности. Стоимость обговаривается заранее.  </p>
  <p><span>Заказ считается принятым после полной оплаты.</span>
  Осуществляем доставку по городу (центральные районы: 200 р.; отдаленные районы: 300-400 р.).</p>";
  $class_slider="serv-bouq";
    $sel_m="";
    $sel_p="";
    $sel_b="
";
  include "header.php";
  include "top_arrow.php";?>
  <section class="serv-page">
    <h1><?php echo $serv_head;?></h1>
    <div class="serv-wrap">

      <div class=" serv-description part-1">
        <div class="serv-slider <?php echo $class_slider;?>">
          <div class="serv-slider-item1"><a class="fresco" href="images/servs/bouqts/1.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="images/servs/bouqts/2.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item3"><a class="fresco" href="images/servs/bouqts/3.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
        </div>
        <?php echo $serv_descr;?>
        <h4>Как мы работаем</h4>
        <?php echo $serv_descr2;?>
      </div>


    </div>

  </section>
  <script>
    $(document).ready(function() {
      $('.sub-link').addClass('checked');

    });
    /*$(window).on('load', function(){
      if ($(window).width() >= '768'){
          $(window).scrollTop($('.header').height());
        }
    });*/
  </script>
   <?php include "send-form.php"; ?>
  <?php include "contacts-block.php"; ?>
  <?php include "footer.php";?>
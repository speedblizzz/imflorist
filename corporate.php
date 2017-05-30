<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Корпоративным клиентам ";
  $descr="Работаем с компаниями, осуществляем доставку праздничных букетов, поздравительных для клиентов, а так же формируем букеты или небольшие композиции для офисов/ресторанов/кафе.";
  $bd_class="one-page";
  $serv_head="Корпоративным клиентам";
  $serv_descr="<p>Активно сотрудничаем с крупными и малыми предприятиями по поставке букетов или композиций из живых цветов, а также срез. </p> <br>
      ";
  $serv_descr2="<p>Для корпоративных клиентов существуют лояльные условия. При заключении годового договора на поставку среза/букетов <span>предоставляем скидку 15%, на букеты от 2000 рублей (с учетом скидки) предоставляется бесплатная доставка в любую точку города.</span> </p> <br>
   <p>По всем вопросам к сотрудничеству обращаться к <a style='color: #873870' href='contacts.php'>Редькиной Анастасии</a>. </p>
      ";
  $class_slider="serv-corp";
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
          <div class="serv-slider-item1"><a class="fresco" href="images/servs/corp/1.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="images/servs/corp/2.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
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
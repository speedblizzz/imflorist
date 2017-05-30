<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Цветочные аксессуары";
  $descr="";
  $bd_class="one-page";
  $serv_head="Цветочные аксессуары";
  $serv_descr="<p><span>Цветочные аксессуары</span> – это именно те мелочи, которые сделают ваш образ, стиль вашей свадьбы индивидуальным. Многие аксессуары необходимы на свадебной фотосесии или love story.<br><span>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span></p> ";
  $serv_descr2="<p>Бутоньерки для друзей жениха<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px; display:inline-block;'>от 150 рублей</span> <br>
Браслеты для подружек невесты<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'>от 300 рублей</span><br>
Веночек для невесты<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'>от 1000 рублей</span><br>
Веночки для подружек невесты <br><span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'>от 700 рублей</span><br>
Цветы в волосы<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'>от 200 рублей</span><br>

Подушечка для колец из цветов/природных материалов<br><span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'> от 700 рублей</span><br>
Оформление бокалов молодых живыми/искусственными цветами <br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'>от 300 рублей за пару</span><br>
Цветочный декор салфеток<br><span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;padding-bottom: 15px;display:inline-block;'> от 50 рублей за шт.</span><br><br>
</p><br>


 <p><span>Расчет стоимости зависит от многих факторов:</span> объем и сложность работы, количество и сорт цветка, эксклюзивность декоративных элементов. Все детали обговариваются заранее. <br>

<span>Приблизительную оценку</span> мы можем дать, выслушав ваши идеи и желания. Более точный расчет сметы определяем <span>после подписания с нами договора.</span>


 </p>";
  $class_slider="serv-fl-acc";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/fl-acc/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="../images/servs/fl-acc/2.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item3"><a class="fresco" href="../images/servs/fl-acc/3.jpg"></a><a href="" class="go-feed">Написать нам</a></div>

        </div>
        <?php echo $serv_descr;?>

      </div>

      <button class="more-price">Стоимость заказа</button>
    </div>

  </section>
  <div class="modal-popup animated slideInDown">
    <div class="modal-closer"><span>X</span></div>
    <div class="price-section">


        <?php echo $serv_descr2;?>

        </div>
        <a class="more-portf" href="../portfolio.php">Примеры работ</a>


  </div>
  <script>
    $(document).ready(function() {
      $('.wed-link').addClass('checked');
      $('.more-price').click(function() {
        $('.price-descr').slideToggle(400);
      });
    });

    /*$(window).on('load', function(){
      if ($(window).width() >= '768'){
          $(window).scrollTop(291);
        }
    });*/
  </script>

   <?php include "send-form.php"; ?>
  <?php include "contacts-block.php"; ?>
  <?php include "footer.php";?>
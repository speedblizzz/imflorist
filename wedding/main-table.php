<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Стол для молодоженов ";
  $descr="Оформление стола молодоженов является неотъемлемым атрибутом свадебного мероприятия.";
  $bd_class="one-page";
  $serv_head="Стол для молодоженов";
  $serv_descr="<p>В наши дни ни одна свадьба не проходит без цветочного оформления. Цветы дополняют атмосферу праздника жизнью и особой красотой! <span>Оформление стола молодоженов</span> является неотъемлемым атрибутом свадебного мероприятия. <span><br>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span></p> ";
  $serv_descr2="<p>
  Классическая композиция
  (2 человека за столом)<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;'>2500 - 3500 р.</span> <br>
  Классическая композиция
  (от 4 до 6 человек)<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;'>от 5000 р.</span> <br>

Комбинированные композиции
  (цветы, аксессуары, свечи, вазы)<br> <span style='font-size:1.4em; font-family: \"Neucha\",cursive !important;'>от 5000 р.</span> <br>
  <span>Создание новых форм</span>, сложных конструкций, объемных размеров из цветочных масс  и др. – <span>оценка стоимости строго индивидуально</span>.
</p> <br>


 <p><span>Расчет стоимости зависит от многих факторов:</span> объем и сложность работы, количество и сорт цветка, эксклюзивность декоративных элементов. Все детали обговариваются заранее. <br> <br>
 <span>Приблизительную оценку</span> мы можем дать, выслушав ваши идеи и желания. Более точный расчет сметы определяем <span>после подписания с нами договора</span>.

 </p>";
  $class_slider="serv-main-tab";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/m-table/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="../images/servs/m-table/2.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item3"><a class="fresco" href="../images/servs/m-table/3.jpg"></a><a href="" class="go-feed">Написать нам</a></div>

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
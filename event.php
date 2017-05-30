<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Цветочное оформление мероприятий, дни рождения, юбилеи, детские праздники, выставки, концерты";
  $descr="Осуществляем цветочное оформление ваших мероприятий. ";
  $bd_class="one-page";
  $serv_head="Оформление мероприятий";
  $serv_descr="<p>Мы создадим для вас праздничную атмосферу на любом мероприятии (день рождения, юбилей, годовщина свадьбы, корпоратив   и т.п). <br> <br>
    - оформление фотозоны; <br>
    - украшение гостевых столов с помощью композиций из живых цветов; <br>
    - создание общей атмосферы в кафе/ресторане;
</p> <br>
<p>А так же оформление тематических вечеринок! </p>
      ";
  $serv_descr2="
  <p><span>Работаем по предоплате - 50% от конечной стоимости.</span></p>
  <p><span>Расчет стоимости</span> зависит от многих факторов: объем и сложность работы, количество и сорт цветка, эксклюзивность декоративных элементов, удаленность рабочей площадки от города, сроки реализации  т.д.</p> <br>
  <p>Приблизительную оценку мы можем дать, выслушав ваши идеи и желания. Более точный расчет сметы определяем <span>после подписания с нами договора</span>. </p>



      ";
  $class_slider="serv-event";
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
          <div class="serv-slider-item1"><a class="fresco" href="images/servs/event/1.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="images/servs/event/2.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
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
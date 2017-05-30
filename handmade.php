<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Интерьерные композиции для дома, дачи или рабочих пространств ";
  $descr="Изготавливаем индивидуальные композиции из искусственных и сухих материалов.";
  $bd_class="one-page";
  $serv_head="Искуственные композиции";
  $serv_descr="<p>Композиции из искусственных цветов и сухих материалов оживляют пространство. Единственный способ украсить помещение с недостатком солнечного света, либо очень сухим климатом- создать интерьерную композицию под ваш стиль и вкус. </p> <br>
      ";
  $serv_descr2="
  <p>На изготовление таких композиций/панно, требуется от 3 дней до 2 недель. Время изготовления зависит от наличия материала и от сложности работы. </p> <br>
  <p>При необходимости выезжаем к вам, чтобы оценить размер и форму будущего изделия. Возможно выполнение в ваших сосудах.
</p> <br>
  <p>Расчет стоимости зависит от размера, от качества и количества материала. <br>Осуществляем доставку по городу (центральные районы: 200 р.; отдаленные районы: 300-400 р.).</p>

      ";
  $class_slider="serv-handmd";
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
        
          <div class="serv-slider-item2"><a class="fresco" href="images/servs/hnmd/2.jpg"></a></a><a href="" class="go-feed">Написать нам</a></div>
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
<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Букет невесты и бутоньерка ";
  $descr="Свадебный букет - важнейший аксессуар для невесты!. Для мужчины таким главным элементом является бутоньерка.";
  $bd_class="one-page";
  $serv_head="Букет невесты и бутоньерка";
  $serv_descr="<p><span>Свадебный букет</span> - важнейший аксессуар для невесты! Он соединяет в себе характер девушки, ее стиль, мельчайшие детали в ее наряде, передает настроение! В его создании необходимо <span>довериться только профессионалам!</span> <br>
Для мужчины таким главным элементом является <span>бутоньерка</span>. Она отличает его от всех гостей, делает образ жениха более торжественным. </br><span>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span></p> ";
  $serv_descr2="<p>Минимальная стоимость заказа <span>от 2500 р. за букет и бутоньерку.</span><br> <br><span>Индивидуальный букет</span> под ваш стиль и тематику свадьбы, с использованием экзотичных цветов  в <span>от 3500 рублей. </span> <br><br>Более точный расчет сметы определяется <span>после подписания с нами договора.</span></p> <br>


 <p><span>Расчет стоимости зависит от многих факторов:</span> объем и сложность работы, количество и сорт цветка, эксклюзивность декоративных элементов. Все детали обговариваются заранее. <br>Приблизительную оценку мы можем дать, выслушав ваши идеи и желания.

 </p>";
  $class_slider="serv-bride";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/bride/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="../images/servs/bride/2.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          

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
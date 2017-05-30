<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Зона регистрации ";
  $descr="Зона регистрации - это главная зона начала вашей совместной истории. Давайте сделаем ее идеальной!";
  $bd_class="one-page";
  $serv_head="Зона регистрации";
  $serv_descr="<p><span>Первые минуты замужества, первый семейный поцелуй, первая семейная фотография</span> – все эти важные моменты надолго останутся в ваших воспоминаниях и в свадебных альбомах.  Это <span>главная зона</span> начала вашей совместной истории. Давайте сделаем ее <span>идеальной!</span><br><span>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span></p> ";
  $serv_descr2="<p>У нас есть бюджетные <span>готовые варианты</span> оформления вашей зоны регистрации, <span>не превышающие 10000 рублей.</span>  <br> <br>
<span>Создание новых решений</span> с вашей тематикой, цветом, под определенный стиль рассчитывается индивидуально. Все детали обговариваются с вами заранее. Более точный расчет сметы определяется после подписания с нами договора.
</p><br>


 <p><span>Расчет стоимости зависит от многих факторов:</span> объем и сложность работы, количество и сорт цветка, эксклюзивность декоративных элементов. Все детали обговариваются заранее. <br> <br><span>Приблизительную оценку</span> мы можем дать, выслушав ваши идеи и желания.

 </p>";
  $class_slider="serv-reg";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/reg/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="../images/servs/reg/2.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item3"><a class="fresco" href="../images/servs/reg/3.jpg"></a><a href="" class="go-feed">Написать нам</a></div>

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
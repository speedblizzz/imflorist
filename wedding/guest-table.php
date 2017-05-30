<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Гостевые столы ";
  $descr="Если вы хотите полностью окунуться в праздник, окружить себя красотой и свадебной атмосферой, вам необходимо оформить гостевые столы. ";
  $bd_class="one-page";
  $serv_head="Гостевые столы";
  $serv_descr="<p>Создание общей концепции и стилистики свадьбы – это немаловажный вопрос. Если вы хотите полностью окунуться в праздник, окружить себя красотой и свадебной атмосферой, вам необходимо оформить и гостевые столы.<br><span>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span> </p>
    <p class='warning'>*Обратите внимание! Мы НЕ ЗАНИМАЕМСЯ разбором поздравительных букетов и созданием из них композиций на столы. <span class='more-price-info'>Узнать подробнее ...</span>
  </p> ";
  $serv_descr2="<p>Цветочная композиция на столы гостей классического вида <span>от 1000 рублей</span> (в стоимость входит прокат вазы). <br><br>
<span>Большую роль</span> в оценке стоимости играет размер стола  и количество сидящих за ним гостей, а также стилистика свадьбы, использование нужных ваз/подставок. <span>Все детали обговариваются заранее.</span>

</p><br>

 <p>Приблизительную оценку мы можем дать, выслушав ваши идеи и желания. <span>Более точный расчет сметы</span> определяем после подписания с нами договора. <br>


 </p>";
  $serv_descr3="<p>
  <span>Поздравительные букеты содержат огромное разнообразие всяческих сортов цветов</span> и их оттенков . Как бы нам не хотелось, но мы не сможем создать единый стиль  оформления.
  </p><br>
  <p>
Обычно <span>после 2-3 часов</span> переноски букета без воды (под лучами солнца) <span>цветок теряет свежесть и тургор</span>. Мы не сможем гарантировать нужный свежий вид композиции.
 </p><br>
  <p>
  <span>Разбор букетов</span> и создание из них композиций <span>занимает порядка 2-3 часов</span>, при условии работы 2 флористов. Не все молодожены имеют такой запас времени между регистрацией и банкетом.

  </p>";
  $class_slider="serv-g-table";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/g-table/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="../images/servs/g-table/2.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item3"><a class="fresco" href="../images/servs/g-table/3.jpg"></a><a href="" class="go-feed">Написать нам</a></div>

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
  <div class="modal-popup2 animated slideInDown">
    <div class="modal-closer2"><span>X</span></div>
    <div class="price-section">
        <?php echo $serv_descr3;?>

  </div>
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
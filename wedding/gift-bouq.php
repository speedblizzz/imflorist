<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | СПЕЦПРЕДЛОЖЕНИЕ! Подарочный букет";
  $descr="Акция! Скидки на подарочные букеты!";
  $bd_class="one-page";
  $serv_head="СПЕЦПРЕДЛОЖЕНИЕ! Подарочный букет";
  $serv_descr="<p>Мы знаем, что многие гости покупают цветы в самых ближайших киосках. И букет не всегда имеет лучшее качество, а это значит, что радовать долго он вас не сможет. <br>

<span>Мы предоставляем возможность вашим друзьям и родственникам сделать заказ букета у нас! </span> <br><span>* Заказ принимается не менее, чем за месяц до вашего мероприятия.</span></br>



</p> ";
  $serv_descr2="<p><span>Скидка 15%</span> на данные подарочные букеты: <br> <br>
    <span style='font-size: 1.6em; font-family:\"Neucha\",cursive;'><span style='text-decoration:line-through; '>1500 р.</span> 1275 р.<br>
        <span style='text-decoration:line-through; '>2000 р.</span> 1700 р.<br>
        <span style='text-decoration:line-through; '>3000 р.</span> 2550 р.<br>
        <span style='text-decoration:line-through; '>5000 р.</span> 4250 р.<br></span><br>
    <span>Доставка букетов</span> на регистрацию/на площадку места проведения мероприятия (от 3-х подарочных букетов) <span>БЕСПЛАТНО</span> ;<br> <br>

    <span>Ваши гости не теряют время на заезд в цветочный магазин</span>, у них есть больше времени для себя;<br><br>
    <span>Вы получаете букеты в стиле вашей свадьбы.</span> Также можем обговорить ваши предпочтения по составу букетов.
<br><br>

 </p>";
  $class_slider="serv-gift-bouq";
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
          <div class="serv-slider-item1"><a class="fresco" href="../images/servs/g-bouq/1.jpg"></a><a href="" class="go-feed">Написать нам</a></div>


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
<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Букеты для Любимых ";
  $descr="Принимаем заказы на цветочные подарки для любимых. Композиции в виде сердца из живых цветов, букеты. Осуществляем доставку. ";
  $bd_class="one-page";
  $serv_head="Букет невесты в подарок!";
$serv_descr="<p>Готовитесь к свадьбе и ищете подходящее предложение по декору и флористике? Закажите у нас <a href='javascript:;' style='font-weight:600;font-style:italic;text-decoration:underline;cursor:pointer;color:#000;' class='more-action'>оформление зоны регистрации*</a> и получите <span>букет невесты в подарок!</span>
 Заинтересовало? <br><a href='https://vk.com/imflorist' target=_blank style='color: #873870;'>Напишите нам</a> или позвоните по т. 8-908-251-68-61!</p>
";
$serv_descr2="<p>Заказы принимаем не позднее, чем за месяц до вашего мероприятия! </p><br>

";
$serv_descr_action = "<p >В <span>оформление зоны регистрации</span> входит:<br><br>
- предметы интерьера ( прокат арки, стоек, ширмы и др.), оформление их цветами;<br><br>
- столик регистрации с декором/цветами;<br><br>
- изготовление подушечки для колец;<br><br>
- изготовление отличительных аксессуаров для подружек невесты и для дружков ( веночки, букетики, бутоньерки)</p> ";
  $class_slider="serv-season";
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
          <div class="serv-slider-item1"><a class="fresco" href="images/servs/season/1-n.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
          <div class="serv-slider-item2"><a class="fresco" href="images/servs/season/2-n.jpg"></a><a href="" class="go-feed">Написать нам</a></div>
         

        </div>
        <?php echo $serv_descr;?>
        <h4>Как мы работаем</h4>
        <?php echo $serv_descr2;?>
        
        
      </div>


    </div>

  </section>
<div class="modal-popup animated slideInDown">
    <div class="modal-closer"><span>X</span></div>
    <div class="price-section">


        <?php echo $serv_descr_action;?>

        </div>
        


  </div>
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
<?php
  $mobile_title="О нас";
  $title="Я-Флорист! | О нас";
  $descr="Команда профессиональных флористов и декораторов. Выезд на место проведения мероприятия. Консультирование. ";
  $bd_class="one-page";
    $sel_m="";
    $sel_p="";
    $sel_b="";
  include "header.php";
  include "top_arrow.php";?>
  <section class="about">

    <div class="about-inf">
    <h2>Команда "Я-Флорист!"</h2>
    <p>
Мы команда профессиональных флористов и декораторов. За плечами множество проектов, выставок, мероприятий и довольных клиентов. </p>
    </div>
    <a href="" class="go-feed">Связаться с нами</a>
    <div class="boss-words">

      <h3>Я, Анастасия Редькина, флорист и арт-диреткор команды "Я-Флорист!</h3>
      <img src="images/boss.jpg" alt="">
      <p>Я являюсь дипломированным бакалавром кафедры «Ботаника и генетика растений» в ПГУ.</p>
      <p>Хочу немного рассказать о нас и о нашей работе. <br>
      Ежегодно мы проходим обучение у лучших мастеров мира и России, совершенствуем свои навыки и узнаем новые тенденции.
      За более чем 6-летний период творчества мы накопили проверенных партнеров и поставщиков. Благодаря этому,  даже в экстремальных ситуациях, выполняем свои обязательства!
</p>
    </div>
    <div class="choise-us">
      <h3>Наши принципы</h3>
      <div class="choise-item">
        <img src="images/flower.png" alt="">
        <h4>Индивидуальный подход</h4>
        <p>Разрабатываем неповторимую идею для вашего мероприятия. Изготавливаем интерьерные композиции, идеально вписывающиеся в ваш дом. Заказывая у нас букет на день рождения, будьте уверены, что он станет лучшим подарком. </p>
      </div>
      <div class="choise-item">
        <img src="images/flower.png" alt="">
        <h4>Гарантированный результат</h4>
        <p>Выполняем свою работу в срок. Заранее обговариваем  все моменты. Сюрпризы будут только положительными. Слушаем и слышим вас. Ваши предпочтения для нас – закон. Итог превзойдет ожидание. Учитываем каждую мелочь! </p>
      </div>
      <div class="choise-item">
        <img src="images/flower.png" alt="">
        <h4>Современный стиль</h4>
        <p>Используем качественные и современные материалы. Работаем по европейским техникам аранжировки цветов и компоновки декоративных элементов. </p>
      </div>
    </div>
    <div class="awards">
    <h3>Награды и сертификаты</h3>
     <div class="award-slides " >

      <a class="fresco" href="images/awards/aw-1.jpg" ><div class="award1"></div></a>
      <a class="fresco" href="images/awards/aw-2.jpg"  ><div class="award2"></div></a>
     <a class="fresco" href="images/awards/aw-3.jpg" > <div class="award3"></div></a>
       <a class="fresco" href="images/awards/aw-4.jpg" ><div class="award4"></div></a>
      <a class="fresco" href="images/awards/aw-5.jpg" ><div class="award5"></div></a>
    </div>
    </div>
  </section>
  <?php include "send-form.php"; ?>
  <?php include "contacts-block.php"; ?>
  <script>
    /*$(window).on('load', function(){
      if ($(window).width() >= '768'){
          $(window).scrollTop($('.header').height());
        }
    });*/
  </script>
  <?php include "footer.php";?>
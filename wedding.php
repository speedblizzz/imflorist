<?php
  $mobile_title="Услуги";
  $title="Я-Флорист! | Оформление свадеб в г. Пермь";
  $descr="Оформление свадьбы в г. Пермь, свадебный декор, аренда свадебного декора. Букеты невесты.";
  $bd_class="one-page";
  $serv_head="Свадебное оформление";
  $class_slider="serv-wed";
    $sel_m="";
    $sel_p="";
    $sel_b="
";
  include "header.php";
  include "top_arrow.php";?>
  <section class="wed-serv-page">
      <h1><?php echo $serv_head;?></h1>
      <div class=" wed-serv-description">
      <ul class="wed-serv-description__list">
        <li class="wed-serv-description__item">
          <h4>Что мы предлагаем</h4>
          <p>Одно из наших любимых направлений – свадебная флористика. Именно в этом направлении нам удается воплотить ваши мечты в настоящую жизнь! Ответственно относимся к подготовке каждого мероприятия. </p>
      </li>
        <li class="wed-serv-description__item">
        <h4>Как мы работаем</h4>
        <p>Принимаем  заявки на оформление вашей свадьбы  не позднее, чем <span style="font-weight: bold;">за 2 месяца до запланированной даты.</span> <br>Первую встречу проводим по договоренности, обычно на площадке проведения мероприятия, либо в удобном для вас месте.На букеты невесты заказ принимаются <span style="font-weight: bold;">за 2 недели.</span> </p></li>
      </ul>

    </div>
    <div class="wed-serv-wrap">

      <div class="wed-serv_item bride"><a href="wedding/bride-bouq.php"><h4><span>Букет невесты</span></h4></a></div>
      <div class="wed-serv_item regzone"><a href="wedding/reg-zone.php"><h4><span>Зона регистрации</span></h4></a></div>
      <div class="wed-serv_item main-table"><a href="wedding/main-table.php"><h4><span>Стол для молодых</span></h4></a></div>
      <div class="wed-serv_item guest-table"><a href="wedding/guest-table.php"><h4><span>Гостевые столы</span></h4></a></div>
      <div class="wed-serv_item flower-acc"><a href="wedding/flower-acc.php"><h4><span>Цветочные аксессуары</span></h4></a></div>
      <div class="wed-serv_item gift-bouq"><a href="wedding/gift-bouq.php"><h4><span>Акция! <br> Подарочный букет</span></h4></a></div>

    </div>


  </section>
  <script>
    $('.main-nav a').each(function() {
        if (this.href == window.location.href)
        {
            $(this).addClass('checked');
        }
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
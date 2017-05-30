<?php
  $mobile_title="Контакты";
  $title="Я-Флорист! | Наши контакты";
  $descr="Цветочное оформление свадеб и мероприятий, доставка букетов и цветочных композиций по г.Перми";
  $bd_class="one-page";
    $sel_m="";
    $sel_p="";
    $sel_b="";
  include "header.php";
  include "top_arrow.php";?>
<section class="contacts">
  <a class="go-feed" href="">Написать нам</a>
  <div class="contact-wrap">
    <div class="social-groups">



        <!-- VK Widget -->
      <div id="vk_groups"></div>

      </div>
       <script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 4, width: "auto", height: "411"}, 78743615);
    </script>

    <div class="contact-map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=oYx-qczBxtq3qzinw048h5EoWi0DcoLd&amp;width=100%25&amp;height=411&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    </div>
    <?php include "send-form.php"; ?>
  </div>
</section>
<script>
    /*$(document).ready(function() {
      if ($(window).width() >= '768'){
          $(window).scrollTop($('.header').height());
        }
    });*/

</script>
  <?php include "contacts-block.php"; ?>
  <?php include "footer.php";?>
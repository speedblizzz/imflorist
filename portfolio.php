<?php
  $mobile_title="Наши работы";
  $title="Я-Флорист! | Наши работы";
  $descr="Цветочное оформление свадеб и мероприятий, доставка букетов и цветочных композиций по г.Перми";
  $bd_class="one-page";
    $sel_m="";
    $sel_p="";
    $sel_b="";
  include "header.php";
  include "top_arrow.php";?>
<section class="portfolio">
  <div class="filter-block">
    <button class="filter-toggle">
              <span></span>
              Выбрать категорию
    </button>
    <div class="button-group filters-button-group">
      <button  class="button is-checked" data-filter="*">Все работы</button>
      <button id="bouquets" class="button" data-filter=".bouqet">Букеты</button>
      <button id="nev_buket" class="button" data-filter=".nev">Букет невесты и бутоньерка</button>
      <button id="reg-zone" class="button" data-filter=".reg">Зона регистрации</button>
      <button id="main-table" class="button" data-filter=".m-table">Стол для молодых</button>
      <button id="guest-table" class="button" data-filter=".g-table">Гостевые столы</button>
      <button id="flower-acs" class="button" data-filter=".fl-acs">Цветочные аксессуары</button>

    </div>
  </div>
  <div class="grid">
  <?php
  include "filter.php"; ?>

  </div>


</section>
  <?php include "send-form.php"; ?>
  <?php include "contacts-block.php"; ?>
  <script>
  /*if ($(window).width() >= '768'){
    $(window).scrollTop($(window).height());
        }*/


  </script>
  <?php include "footer.php";?>
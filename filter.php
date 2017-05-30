<?php

  $filelist = "";
  $path = "portfolio";
  function readfs($path){
    $html = Array();
    if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
          if($entry == '.' || $entry == '..'){
          }
          elseif (strpos($entry,'.jpg') !==false) {
            $html[] = $entry;
          }
        }
        closedir($handle);
    }
    return $html;
  }
  $filelist = readfs($path);
    // сортировка по имени файла, можно убрать если не нужно

foreach ($filelist as $key => $value) {
      if (strpos($value, 'bouquet') === 0) {
        echo "<a class=\"fresco grid-item bouqet\" data-category=\"bouqet\" data-fresco-group='bouqets' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }

      elseif (strpos($value, 'nev_buket') === 0) {
        echo "<a class=\"fresco grid-item nev\" data-category=\"nev\" data-fresco-group='nev_bouq' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }
      elseif (strpos($value, 'reg_zone') === 0) {
        echo "<a class=\"fresco grid-item reg\" data-category=\"reg\" data-fresco-group='reg-zone' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }
      elseif (strpos($value, 'main_table') === 0){
        echo "<a class=\"fresco grid-item m-table\" data-category=\"m-table\" data-fresco-group='main-table' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }
      elseif (strpos($value, 'guest_table') === 0){
        echo "<a class=\"fresco grid-item g-table\" data-category=\"g-table\" data-fresco-group='guest-table' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }

      elseif (strpos($value, 'flower_acs') === 0)  {
        echo "<a class=\"fresco grid-item fl-acs\" data-category=\"fl-acs\" data-fresco-group='flower-acs' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }
      elseif (strpos($value, 'gift_buket') === 0) {
        echo "<a class=\"fresco grid-item nev\" data-category=\"nev\" data-fresco-group='nev_bouq' href=\"$path/$value\">
        <img src='$path/$value'>
        </a>";
      }

    }




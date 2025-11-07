<?php
/*
 * Template Name: Development
*/


get_header();
$url = get_template_directory_uri();

?>

<main class="block-01 pos-r df-sp-st w-100p z-section">
  <img src="<?= $url; ?>/assets/img/block-01/bg-1920.jpg" alt="alto" class="background-image" />
  <div class="background-shadow" style="background-color: rgba(0,0,0,0.3);"></div>
  <div class="container container-main">
    <h1 class="h1">Ремонт бытовой техники <br/>в&nbsp;Ростове-на-Дону</h1>
    <div class="block-items"><div class="block-item">— Выезд мастера в течении 40 минут</div></div>
    <button class="btn btn-popup-call">Вызвать мастера</button>
  </div>

  <div class="container"><address class="address-icon">Мамайка, г. Сочи</address></div>
</main>

<?php
get_footer();
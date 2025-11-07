<?php
/*
 * Template Name: Development
*/


get_header();

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';
?>

<main class="block-01">
  <div class="container df-sp-st">
    <div class="block-content">
      <h1 class="h1">Ремонт бытовой техники и&nbsp;компьютеров от&nbsp;лучших профессионалов <br/>в&nbsp;Ростове-на-Дону!</h1>
      <p class="sub_title">В&nbsp;90% случаев чиним бытовую технику в&nbsp;день обращения! Все что вам нужно&nbsp;&mdash; позвонить нам, и&nbsp;мастер сразу выедет к&nbsp;вам.</p>
      <button class="btn icon-btn-arrow-01">Вызвать мастера</button>
    </div>
    <img src="<?= $url; ?>/assets/img/block-01/image-01.jpeg" alt="alto" class="block-image" />
  </div>
</main>

<?php
get_footer();
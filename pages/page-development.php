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

  <section class="block-02 pos-r w-100p z-section" id="block-02">
    <div class="container">
      <div class="block__title pos-r df-sp-ce w-100p" data-title="title">
        <h2 class="h2">title</h2>
        <a href="#" class="btn btn-accent">link</a>
      </div>

      <div class="post-items">
        <div class="post-item">
          <img class="post-item__image" src="<?= $url; ?>/assets/img/block-03/image-01.jpg" alt="alto" />
          <div class="post-item__content">
            <a href="#"><h3 class="post-title">Title</h3></a>
            <button class="btn btn-popup-call-master">Вызвать мастера</button>
            <a href="#" class="post-excerpt">excerpt</a>
            <a href="#" class="post-link"></a>
          </div>
        </div>
        <div class="post-item">
          <img class="post-item__image" src="<?= $url; ?>/assets/img/block-03/image-01.jpg" alt="alto" />
          <div class="post-item__content">
            <a href="#"><h3 class="post-title">Title</h3></a>
            <button class="btn btn-popup-call-master">Вызвать мастера</button>
            <a href="#" class="post-excerpt">excerpt</a>
            <a href="#" class="post-link"></a>
          </div>
        </div>
        <div class="post-item">
          <img class="post-item__image" src="<?= $url; ?>/assets/img/block-03/image-01.jpg" alt="alto" />
          <div class="post-item__content">
            <a href="#"><h3 class="post-title">Title</h3></a>
            <button class="btn btn-popup-call-master">Вызвать мастера</button>
            <a href="#" class="post-excerpt">excerpt</a>
            <a href="#" class="post-link"></a>
          </div>
        </div>
        <div class="post-item">
          <img class="post-item__image" src="<?= $url; ?>/assets/img/block-03/image-01.jpg" alt="alto" />
          <div class="post-item__content">
            <a href="#"><h3 class="post-title">Title</h3></a>
            <button class="btn btn-popup-call-master">Вызвать мастера</button>
            <a href="#" class="post-excerpt">excerpt</a>
            <a href="#" class="post-link"></a>
          </div>
        </div>
        <div class="post-item">
          <img class="post-item__image" src="<?= $url; ?>/assets/img/block-03/image-01.jpg" alt="alto" />
          <div class="post-item__content">
            <a href="#"><h3 class="post-title">Title</h3></a>
            <button class="btn btn-popup-call-master">Вызвать мастера</button>
            <a href="#" class="post-excerpt">excerpt</a>
            <a href="#" class="post-link"></a>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php
get_footer();
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webdmitriev
 */

$url = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?= esc_url($url); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class('is-animation'); ?>>

	<div id="app">

		<header class="header">
			<div class="container">
				<div class="line-wrap df-sp-ce w-100p">
					<div class="header-logotype df-fs-ce w-100p">
						<a href="<?php echo get_home_url(null, '/'); ?>" class="logotype"><img src="<?= $url; ?>/assets/img/header/logotype.svg" alt="alto>" /></a>
						<div class="header-logotype__content df-ce-ce w-100p">
							<?php if(true): ?><span class="header-logotype__text">г. РОСТОВ-НА-ДОНУ</span><?php endif; ?>
							<?php if(true): ?><span class="header-logotype__text bold">РЕМОНТ БЫТОВОЙ</span><?php endif; ?>
							<?php if(true): ?><span class="header-logotype__text">ТЕХНИКИ</span><?php endif; ?>
						</div>
					</div>

					<div class="header-contacts df-fe-ce w-100p">
						<?php
							wp_nav_menu( [
								'theme_location'  => 'header-menu',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'header-menu df-fe-ce w-100p',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							] );
						?>

						<button class="header-button btn-popup-call">Срочный вызов</button>

						<button class="burger-menu"><span></span></button>
					</div>
				</div>
			</div>
		</header>

		<div class="header-mobile">
			<div class="header-mobile__content d-block w-100p scroll-line-none">
				<div class="header-mobile__content-top df-sp-ce w-100p">
					<div class="header-logotype df-fs-ce w-100p">
						<a href="<?php echo get_home_url(null, '/'); ?>" class="logotype"><img src="<?= $url; ?>/assets/img/header/logotype.svg" alt="alto" /></a>
						<div class="header-logotype__content df-ce-ce w-100p">
            <?php if(true): ?><span class="header-logotype__text">г. РОСТОВ-НА-ДОНУ</span><?php endif; ?>
            <?php if(true): ?><span class="header-logotype__text bold">РЕМОНТ БЫТОВОЙ</span><?php endif; ?>
            <?php if(true): ?><span class="header-logotype__text">ТЕХНИКИ</span><?php endif; ?>
						</div>
					</div>

					<button class="close-menu"><span></span></button>
				</div>

				<?php
					wp_nav_menu( [
						'theme_location'  => 'header-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'header-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				?>

				<button class="header-button btn-popup-call">Срочный вызов</button>

			</div>
		</div>

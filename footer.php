<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webdmitriev
 */

$url = get_template_directory_uri();

?>
		<div style="display: block; width: 100%; height: 400px;"></div>

		<footer class="footer">
			<div class="container">
				<div class="line-wrap df-sp-ce w-100p">
					<div class="footer-logotype df-fs-ce w-100p">
						<a href="<?php echo get_home_url(null, '/'); ?>" class="logotype"><img src="<?= $url; ?>/assets/img/header/logotype.svg" alt="<?= $_ALT; ?>" /></a>
						<div class="footer-logotype__content df-ce-ce w-100p">
							<?php if(true): ?><span class="footer-logotype__text">г. РОСТОВ-НА-ДОНУ</span><?php endif; ?>
							<?php if(true): ?><span class="footer-logotype__text bold">РЕМОНТ БЫТОВОЙ</span><?php endif; ?>
							<?php if(true): ?><span class="footer-logotype__text">ТЕХНИКИ</span><?php endif; ?>
						</div>
					</div>

					<?php
						wp_nav_menu( [
							'theme_location'  => 'footer-menu',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'footer-menu df-fs-ce w-100p',
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
				</div>
				<div class="line-bottom df-sp-fs w-100p">
					<div class="line-bottom__content">
						<span class="text">© <?php echo date('Y'); ?> Все права защищены.</span>
						<?php if(true): ?><span class="text">Сайт является информационной площадкой по приёму заявок на ремонт бытовой техники. <br/>Заявки, оставленные на сайте, передаются независимым мастерам и сервисным организациям.</span><?php endif; ?>
					</div>
					<div class="line-bottom__content">
						<a href="<?php echo get_home_url(null, '/privacy-policy'); ?>" class="text" style="text-align: right;">Политика конфиденциальности</a>
						<a href="<?php echo get_home_url(null, '/user-agreement'); ?>" class="text" style="text-align: right;">Пользовательское соглашение</a>
					</div>
				</div>
			</div>
		</footer>

		<button class="fixed-call btn-popup-call">Срочный вызов мастера</button>

	</div><!-- #app -->

<?php wp_footer(); ?>

</body>
</html>

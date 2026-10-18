<?php
$unp = get_field('footer_unp', 'options') ?? '';
$links = get_field('footer_links', 'options') ?? '';
?>
</main>

<footer class="footer">
	<div class="container footer__container">
		<div class="footer__info">
			<div class="footer__logo logo">
				<?php mx_logo(); ?>
			</div>
			<p class="footer__unp">
				<?php echo esc_html($unp) ?>
			</p>
		</div>
		<nav class="footer__menu footer-menu">
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
					'depth' => 1
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<?php if ($links): ?>
			<div class="footer__links">
				<?php foreach ($links as $item): ?>
					<a class="footer__link" href="<?php echo esc_url($item['link']['url']) ?>" target="_blank">
						<?php echo esc_html($item['link']['title']) ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</footer>

<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/scroll-to-top') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>
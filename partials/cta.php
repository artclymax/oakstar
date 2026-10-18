<?php
$page = get_page_by_path('home');

$title = get_field('cta_title', $page) ?? '';
$descr = get_field('cta_descr', $page) ?? '';
$image = get_field('cta_image', $page) ?? '';

?>
<section class="cta" id="cta">
	<div class="container cta__container">
		<div class="cta__body">
			<div class="cta__content">
				<h2 class="cta__title title-2">
					<?php echo esc_html($title) ?>
				</h2>
				<div class="descr cta__descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
				<div class="cta__form cta-form">
					<?php echo do_shortcode('[contact-form-7 id="3f09388" title="Заказать звонок"]') ?>
				</div>
			</div>
			<?php if ($image): ?>
				<div class="cta__image image-box jarallax">
					<?php echo wp_get_attachment_image(
						$image['ID'],
						'large',
						false,
						array(
							'class' => 'img jarallax-img',
							'alt' => $image['alt'] ?: esc_html($title)
						)
					); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
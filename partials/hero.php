<?php
$page = get_page_by_path('home');

$title = get_field('hero_title', $page) ?? '';
$descr = get_field('hero_descr', $page) ?? '';
$image = get_field('hero_image', $page) ?? '';
$form_title = get_field('hero_form_title', $page) ?? '';
$form_descr = get_field('hero_form_descr', $page) ?? '';

?>
<section class="hero jarallax" id="hero" style="background-image: url('<?php echo esc_url($image) ?>');">
	<div class="container hero__container">
		<div class="hero__content">
			<h2 class="hero__title title-1">
				<?php echo nl2br($title) ?>
			</h2>
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<div class="hero__form hero-form">
			<h3 class="hero-form__title title-3">
				<?php echo esc_html($form_title) ?>
			</h3>
			<div class="hero-form__descr descr">
				<?php echo wp_kses_post($form_descr) ?>
			</div>
			<div class="hero-form__form">
				<?php echo do_shortcode('[contact-form-7 id="3f09388" title="Заказать звонок"]'); ?>
			</div>
		</div>
	</div>
</section>
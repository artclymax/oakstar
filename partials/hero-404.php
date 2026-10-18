<?php
$page = 'options';

$title = get_field('page404_title', $page) ?? '';
$descr = get_field('page404_descr', $page) ?? '';
$btn = get_field('page404_btn', $page) ?? '';
$image = get_field('page404_image', $page) ?? '';

?>
<section class="section hero404 jarallax" id="hero404" style="background-image: url('<?php echo esc_url($image) ?>');">
	<div class="container hero404__container">
		<div class="hero404__404">
			404
		</div>
		<h2 class="hero404__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="descr hero404__descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<a class="btn hero404__btn" href="<?php echo esc_url($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>
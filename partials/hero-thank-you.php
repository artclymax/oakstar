<?php
$page = 'options';

$title = get_field('thankyou_title', $page) ?? '';
$btn = get_field('thankyou_btn', $page) ?? '';
$image = get_field('thankyou_image', $page) ?? '';

?>
<section class="section hero404 hero-thank-you jarallax" id="hero404" style="background-image: url('<?php echo esc_url($image) ?>');">
	<div class="container hero404__container">
		<h2 class="hero404__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<a class="btn hero404__btn" href="<?php echo esc_url($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>
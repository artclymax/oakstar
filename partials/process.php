<?php
$page = get_page_by_path('home');

$title = get_field('process_title', $page) ?? '';
$image = get_field('process_image', $page) ?? '';
$list = get_field('process_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="process jarallax" id="process" style="background-image: url('<?php echo esc_url($image) ?>');">
		<div class="container process__container">
			<h2 class="process__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="process__list grid">
				<?php foreach ($list as $index => $item): ?>
					<li class="process__item process-item">
						<div class="process-item__wrapper">
							<div class="process-item__header">
								<div class="process-item__counter">
									<?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
								</div>
								<h3 class="process-item__title title-3">
									<?php echo esc_html($item['title']) ?>
								</h3>
							</div>
							<div class="process-item__descr descr">
								<?php echo wp_kses_post($item['descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
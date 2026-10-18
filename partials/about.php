<?php
$page = get_page_by_path('home');

$title = get_field('about_title', $page) ?? '';
$descr = get_field('about_descr', $page) ?? '';
$image = get_field('about_image', $page) ?? '';
$list = get_field('about_list', $page) ?? '';

?>
<?php if ($descr || $list): ?>
	<section class="about" id="about">
		<div class="container about__container">
			<h2 class="about__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="about__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<?php if ($image): ?>
				<div class="about__image image-box jarallax">
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
			<?php if ($list): ?>
				<ul class="about__list grid">
					<?php foreach ($list as $item): ?>
						<li class="about__item about-item">
							<?php if ($item['image']): ?>
								<div class="about-item__image">
									<?php echo wp_get_attachment_image(
										$item['image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['image']['alt'] ?: esc_html($item['title'])
										)
									); ?>
								</div>
							<?php endif; ?>
							<h3 class="about-item__title title-3">
								<?php echo esc_html($item['title'])?>
							</h3>
							<div class="about-item__descr descr">
								<?php echo wp_kses_post($item['descr'])?>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
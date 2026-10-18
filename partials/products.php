<?php
$args = [
	'post_type' => 'projects',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<?php if ($query->have_posts()): ?>
	<section class="products jarallax" id="products">
		<div class="container products__container">
			<h2 class="products__title title-2">Продукция</h2>
			<ul class="products__list grid">
				<?php
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="products__item products-item" data-service>
						<div class="products-item__front">
							<div class="products-item__image image-box">
								<?php the_post_thumbnail() ?>
							</div>
							<div class="products-item__content">
								<h3 class="products-item__title title-3">
									<?php the_title(); ?>
								</h3>
								<button class="products-item__btn btn" type="button" data-service-btn>
									Подробнее
								</button>
							</div>
						</div>
						<div class="products-item__back">
							<div class="products-item__wrapper">
								<div class="products-item__descr descr">
								<?php the_content(); ?>
								</div>
							</div>
							<button class="products-item__btn btn" type="button" data-service-btn>
								Закрыть
							</button>
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
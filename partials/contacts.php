<?php
$page = get_page_by_path('home');

$title = get_field('contacts_title', $page) ?? '';
$map = get_field('contacts_map', $page) ?? '';

$phone = get_field('contacts_phone', $page) ?? '';
$email = get_field('contacts_email', $page) ?? '';
$ur_address = get_field('contacts_ur_address', $page) ?? '';
$post_address = get_field('contacts_post_address', $page) ?? '';
$pay_address = get_field('contacts_pay_address', $page) ?? '';

?>
<section class="contacts" id="contacts">
	<div class="container contacts__container">
		<h2 class="contacts__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="contacts__content">
			<?php if ($phone['list'] || $email['list']): ?>
				<div class="contacts__box">
					<?php if ($phone['list']): ?>
						<div class="contacts__item contacts-item">
							<h3 class="contacts-item__title icon icon--phone">
								<span class="contacts-item__text">
									<?php echo esc_html($phone['title']) ?>
								</span>
							</h3>
							<ul class="contacts-item__list">
								<?php foreach ($phone['list'] as $item): ?>
									<li class="contacts-item__item">
										<a class="contacts-item__link link" href="tel:+<?php echo esc_attr(correct_phone($item['phone'])) ?>">
											<?php echo esc_html($item['phone']) ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
					<?php if ($email['list']): ?>
						<div class="contacts__item contacts-item">
							<h3 class="contacts-item__title icon icon--email">
								<span class="contacts-item__text">
									<?php echo esc_html($email['title']) ?>
								</span>
							</h3>
							<ul class="contacts-item__list">
								<?php foreach ($email['list'] as $item): ?>
									<li class="contacts-item__item">
										<a class="contacts-item__link link" href="mailto:<?php echo esc_attr($item['email']) ?>">
											<?php echo esc_html($item['email']) ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if ($ur_address['descr'] || $post_address['descr']): ?>
				<div class="contacts__box">
					<?php if ($ur_address['descr']): ?>
						<div class="contacts__item contacts-item">
							<h3 class="contacts-item__title icon icon--address">
								<span class="contacts-item__text">
									<?php echo esc_html($ur_address['title']) ?>
								</span>
							</h3>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($ur_address['descr']) ?>
							</div>
						</div>
					<?php endif; ?>
					<?php if ($post_address['descr']): ?>
						<div class="contacts__item contacts-item">
							<h3 class="contacts-item__title">
								<span class="contacts-item__text">
									<?php echo esc_html($post_address['title']) ?>
								</span>
							</h3>
							<div class="contacts-item__descr descr">
								<?php echo wp_kses_post($post_address['descr']) ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if ($pay_address['descr']): ?>
				<div class="contacts__box">
					<div class="contacts__item contacts-item">
						<h3 class="contacts-item__title icon icon--address">
							<span class="contacts-item__text">
								<?php echo esc_html($pay_address['title']) ?>
							</span>
						</h3>
						<div class="contacts-item__descr descr">
							<?php echo wp_kses_post($pay_address['descr']) ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			</div>
			<div class="contacts__map">
			<?php echo wp_kses($map, [
				'iframe' => [
					'src' => true,
					'width' => true,
					'height' => true,
					'style' => true,
					'allowfullscreen' => true,
					'loading' => true,
				],
			]) ?>
			</div>
	</div>
</section>
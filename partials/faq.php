<?php
$page = get_page_by_path('home');

$title = get_field('faq_title', $page) ?? '';
$image = get_field('faq_image', $page) ?? '';
$list = get_field('faq_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="faq jarallax" id="faq" style="background-image: url('<?php echo esc_url($image) ?>');">
		<div class="container faq__container">
			<h2 class="faq__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="faq__list">
				<?php foreach ($list as $index => $item): ?>
					<li class="faq__item faq-item<?php echo !$index ? '  spoiler-active' : '' ?>" data-spoiler>
						<button class="faq-item__btn" data-spoiler-title>
							<h3 class="faq-item__title">
								<?php echo esc_html($item['question']) ?>
							</h3>
							<div class="faq-item__icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_120_167)">
										<path
											d="M0.474934 7.98153L11.1135 18.6517C11.2401 18.7784 11.3773 18.8679 11.5251 18.9202C11.6728 18.9734 11.8311 19 12 19C12.1689 19 12.3272 18.9734 12.4749 18.9202C12.6227 18.8679 12.7599 18.7784 12.8865 18.6517L23.5567 7.98153C23.8522 7.68602 24 7.31662 24 6.87335C24 6.43008 23.8417 6.05013 23.5251 5.73351C23.2084 5.41689 22.8391 5.25858 22.4169 5.25858C21.9947 5.25858 21.6253 5.41689 21.3087 5.73351L12 15.0422L2.69129 5.73351C2.39578 5.438 2.03187 5.29024 1.59958 5.29024C1.16644 5.29024 0.791558 5.44855 0.474934 5.76517C0.158312 6.0818 5.00547e-07 6.45119 5.19e-07 6.87335C5.37454e-07 7.29552 0.158312 7.66491 0.474934 7.98153Z"
											fill="url(#paint0_linear_120_167)" />
									</g>
									<defs>
										<linearGradient id="paint0_linear_120_167" x1="24" y1="19" x2="12.1494" y2="-1.69765"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#30913A" />
											<stop offset="1" stop-color="#49A751" />
										</linearGradient>
										<clipPath id="clip0_120_167">
											<rect width="24" height="24" fill="white"
												transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 24 24)" />
										</clipPath>
									</defs>
								</svg>
							</div>
						</button>
						<div class="faq-item__content" data-spoiler-content>
							<div class="faq-item__descr descr">
								<?php echo wp_kses_post($item['answer']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>
	<!-- BEGIN of 404 page -->
	<?php $not_found_page_bg = get_field('page_404_background_image','options') ?>
	<div class="not-found-page" <?php bg($not_found_page_bg, 'full_hd') ?>>
		<div class="row expanded small-collapse">
			<!-- BEGIN of page content -->
			<?php if($page_404_numbers_image = get_field('page_404_numbers_image','options')): ?>
				<div class="large-6 small-12 columns">
					<div class="error404-img">
						<img src="<?php echo $page_404_numbers_image['sizes']['large'] ; ?>" alt="">
					</div>
				</div>
			<?php endif; ?>
			<div class="large-6 small-12 columns">
				<main class="not-found-caption">
					<?php if($page_404_title = get_field('page_404_title','options')): ?>
						<h2><?php echo $page_404_title ; ?></h2>
					<?php endif; ?>
					
					<?php
						if(!$button_text = get_field('page_404_button_text','options')){
							$button_text = __('Return to Home Page', 'text_domain');
						}
					?>
					<p class="error-404-link"><a class="label" href="<?php echo get_bloginfo('url'); ?>"><?php echo $button_text ; ?></a></p>
				</main>
			</div>
			<div class="large-8 large-centered small-12 columns cta-404-col">
				<?php echo do_shortcode('[footercta]'); ?>
			</div>
			<!-- END of page content -->
		</div>
	</div>
	<!-- END of 404 page -->
<?php get_footer(); ?>
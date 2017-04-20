<?php
/**
* Template Name: Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blue_Diamond_Air_Solution
 */

// Philosophy
$philosophy_header = get_field('philosophy_header');
$philosophy_text	= get_field('philosophy_text');

// Pricing
$pricing_header = get_field('pricing_header');
$pricing_text = get_field('pricing_text');
$pricing_hook = get_field('pricing_hook');
$pricing_hook_two = get_field('pricing_hook_two');
$pricing_list = get_field('pricing_list');
$pricing_list_two = get_field('pricing_list_two');
$pricing_hook_link = get_field('pricing_hook_link');
$pricing_hook_link_two = get_field('pricing_hook_link_two');
$pricing_hook_link_text = get_field('pricing_hook_link_text');
$pricing_hook_link_text_two = get_field('pricing_hook_link_text_two');
$price_image_one = get_field('price_image_one');
$price_image_two = get_field('price_image_two');
get_header(); ?>

	<section>
	<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<?php include('components/page/schedule.php'); ?>
				</div>
				<div class="col-md-4">
					<?php include('components/page/about_us.php'); ?>
				</div>
				<div class="col-md-4">
					<?php include('components/page/testimonial.php'); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- This begins the home page template -->
	<section id="team" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2><?php echo $philosophy_header; ?></h2>
				<h4 class="light muted"><?php echo $philosophy_text; ?></h4>
			</div>
		<?php get_template_part('components/page/content', 'philosophy'); ?>
		</div>
		<div class="cut cut-bottom"></div>
	</section>

<!-- Add this post if you want the services section -->
	<!-- <?php //include('components/page/service.php') ?> -->


	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top "><?php echo $pricing_header; ?></h2>
				<div class="light "><?php echo $pricing_text; ?></div>
			</div>

			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="<?php echo $price_image_one; ?>">
							<div class="white"><?php echo $pricing_hook; ?></div>
							<!-- <h4 class="white regular light">$150.00 <span class="small-font"></span></h4> -->

							<?php if (!empty($pricing_hook_link_text) ): ?>
								<a href="<?php echo $pricing_hook_link?>" data-toggle="" data-target="" class="btn btn-white-fill"><?php echo $pricing_hook_link_text; ?></a>

							<?php endif; ?>


							<i class="info-icon icon_question"></i>
						</div>

						<div class="box-second active">
						 <?php echo $pricing_list; ?>
						</div>
					</div>

						<div class="pricing">
						<div class="box-main" data-img="<?php echo $price_image_two[url]; ?>">
							<div class="white"><?php echo $pricing_hook_two; ?></div>
							<!-- <h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4> -->


							<?php if (!empty($pricing_hook_link_text_two) ): ?>
								<a href="<?php echo $pricing_hook_link_two?>" data-toggle="" data-target="" class="btn btn-white-fill"><?php echo $pricing_hook_link_text_two; ?></a>

							<?php endif; ?>

							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
						 <?php echo $pricing_list_two; ?>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<!-- <i class="icon fa fa-twitter"></i> -->

						<?php juicer_feed('name=bluediamondair&per=3&columns=5'); ?>


					</div>
				</div>
			</div>
		</div>
	</section>




<?php get_footer(); ?>

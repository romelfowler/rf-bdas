<?php

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

 ?>

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

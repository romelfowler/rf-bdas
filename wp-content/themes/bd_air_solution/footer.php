<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blue_Diamond_Air_Solution
 */

?>

</div>
<!-- page-site -->
<footer>
	<div class="container">

			<?php include('page-footer.php'); ?>
		
	</div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
	<ul>
	</ul>
	<a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/typewriter.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.onepagenav.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

</body>
</html>
<?php wp_footer(); ?>

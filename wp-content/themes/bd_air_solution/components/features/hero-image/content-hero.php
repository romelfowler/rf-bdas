<?php
/**
 * The template used for displaying hero content
 *
 * @package Blue_Diamond_Air_Solution
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="bd_air_solution-hero">
		<?php the_post_thumbnail( 'bd_air_solution-hero' ); ?>
	</div>
<?php endif; ?>

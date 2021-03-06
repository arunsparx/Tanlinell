<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Tanlinell
 * @since Tanlinell 1.0
 */

get_header(); ?>

<div class="main" role="main">
		
		
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>



	<?php
		// REMOVED: If comments are required for Page templates then uncomment
		/* comments_template( '', true );  */
	?>

<?php endwhile; // end of the loop. ?>

	
</div><!-- .main -->

<div class="sub">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
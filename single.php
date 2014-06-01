<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; // end of the loop. ?>
</div><!-- .post-wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
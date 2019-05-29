<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<section class="social-buttons">
			<button type="button" class="black-btn">
			<i class="fab fa-facebook-f"></i>
			<span>Like</span>
			<button type="button" class="black-btn">
			<i class="fab fa-twitter"></i>
			<span>Tweet</span>
			<button type="button" class="black-btn">
			<i class="fab fa-pinterest"></i>
			<span>Pin</span>
			</section>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

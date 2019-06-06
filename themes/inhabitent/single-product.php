<?php
/**
 * The shop page template file.
 * 
 * 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    
<!--this code is for grabbing the product title and image -->  
	
			<?php while ( have_posts() ) : the_post('showposts=4'); ?>

				<?php if ( has_post_thumbnail() ) : ?>
				
		
					<section class="product-image">
				        <img src="<?php the_post_thumbnail_url(); ?>">
					</section>
                        <section class="product-info">
							<h1 class="product-title"><?php echo the_title(); ?></h1> 
							<p class="product-price">$<?php echo CFS()->get( 'price' ); ?></p>
							<?php echo the_content(); ?>
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
						</section>
              
            <?php endif; endwhile;
            // End of the loop. ?>
           
      

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
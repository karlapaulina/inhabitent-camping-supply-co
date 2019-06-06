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

    <?php $args = ['post_type' => 'product', 'order' => "ASC"];
	  $products_posts = get_posts($args);
      ?>
      

      <!--this code is for grabbing the product categories -->
    
	<?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
      $products_types = get_terms($bob);
      ?>

 <section class="page-header">     
        <h1>
         <?php echo single_term_title();?>
         </h1>
         <?php  echo term_description();?>
</section>


<!--this code is for grabbing the product title and image -->  
		<section class="products-categories">
			<?php while ( have_posts() ) : the_post('showposts=4'); ?>

				<?php if ( has_post_thumbnail() ) : ?>
				
			<section class="categories-products">
					<article class="categories-product-image">
				        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                    </article>
                        <article class="categories-product-meta">
                            <p class="categories-product-title"><?php echo the_title(); ?></p>   
                            <p class="categories-product-price">$<?php echo CFS()->get( 'price' ); ?></p>
                        </article>
            </section>    
            <?php endif; endwhile;
            // End of the loop. ?>
             </section>
      

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
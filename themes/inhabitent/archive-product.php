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

     <!--this code -->    

    <?php $args = ['post_type' => 'product', 'order' => "ASC"];
	  $products_posts = get_posts($args);
      ?>
      

      <!--this code is for grabbing the product categories -->
    
	<?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
      $products_types = get_terms($bob);
      ?>
 <section class="page-header">     
   <h1>shop stuff</h1>
    <ul class="product-type-list">
        <?php foreach($products_types as $types):?>
        <li><a href="<?php  echo get_term_link($types);?>"><?php  echo $types->name;?></a></li>

        <?php endforeach ;?>
    </ul>
</section>


<!--this code is for grabbing the product title and image -->  
		<section class="shop-products">
			<?php while ( have_posts() ) : the_post('showposts=16'); ?>

				<?php if ( has_post_thumbnail() ) : ?>
				
			<section class="shop-product">
					<article class="product-image">
				        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                    </article>
                        <article class="product-meta">
                            <p class="shop-product-title"><?php echo the_title(); ?></p>   
                            <p class="shop-product-price">$<?php echo CFS()->get( 'price' ); ?></p>
                        </article>
            </section>    
            <?php endif; endwhile;
            // End of the loop. ?>
             </section>

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>


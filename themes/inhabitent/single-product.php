<?php
/**
 * The single product page template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--this code is for grabbing the product title and image -->
	  <?php foreach($products_posts as $post):?>
	  <h2><?php echo $post->post_title ;?></h2>
	 <?php echo get_the_post_thumbnail();?>
      <?php endforeach ;?>
      

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

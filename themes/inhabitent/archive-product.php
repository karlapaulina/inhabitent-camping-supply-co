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
 <header class="page-header">     
   <h1>shop stuff</h1>
    <ul class="product-type-list">
        <?php foreach($products_types as $types):?>
        <li><a href="<?php  echo get_term_link($types);?>"><?php  echo $types->name;?></a></li>

        <?php endforeach ;?>
    </ul>
</header>


<!--this code is for grabbing the product title and image -->
	  <?php foreach($products_posts as $post):?>
	  <h2><?php echo $post->post_title ;?></h2>
	 <?php echo get_the_post_thumbnail();?>
      <?php endforeach ;?>
      

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>


<?php
/**
 * The front-[age] template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<section class="home-banner">
		<img src="<?php echo get_template_directory_uri().'/assets/images/logos/' ?>inhabitent-logo-full.svg" alt="Inhabitent Logo Full"/>
	</section>

	<?php $args = ['post_type' => 'product', 'order' => "ASC"];
	  $products_posts = get_posts($args);
		?>

	<!--this code is for grabbing the product categories -->

		<?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
      $products_types = get_terms($bob);
      ?>
<section class="home-shop">
  		<h1 class="home-titles">shop stuff</h1>
    <section class="home-product-type-block">
				<?php foreach($products_types as $types):?>
				<article class="home-product-type-item">
					<?php echo get_term_thumbnail($types->term_taxonomy_id) ?>
					<?php echo term_description( $types, $products_types) ?>
					<a href="<?php  echo get_term_link($types);?>"><?php  echo $types->name;?> stuff</a>
				</article>
				<?php endforeach ;?>
	</section>
</section>

<section class="latest-entries">
	<h1 class="home-titles">inhabitent journal</h1>
	<section class="home-post-type-block">
			<?php
				$args = array( 'numberposts' => '3' );
				$recent_posts = wp_get_recent_posts( $args );
				?>
				<?php foreach( $recent_posts as $recent ){	
					echo	'<article class="home-post-item">';
					echo get_the_post_thumbnail( $recent["ID"]);
					echo '<article class="post-info">';
					echo '<p class="meta">';
					echo red_starter_posted_on(); 
					echo ' ';
					echo comments_number( '0 Comments', '1 Comment', '% Comments' ); 
					echo '</p>';
					echo '<h2><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h2> ';
					echo '</article>';
					echo '<a class="moretag" href="'. get_permalink($recent["ID"]). '">Read Entry</a>';
					echo	'</article>';
				}
				wp_reset_query();
			?>
	</section>
</section>




		
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

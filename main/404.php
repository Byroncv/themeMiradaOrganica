<?php
/**
 * The template for displaying 404 pages (not found)
 *

 */

get_header();
?>
<?php
			$blog = new WP_Query(
              array(
                'post_type' => 'post', 
                'posts_per_page' => 1
      
              )
          );

         while ($blog->have_posts()) {
           $blog->the_post();
          ?>

	<div>
		<header>
			<h1> 404</h1>
			<p>Por acá no hay nada</p>
			<p>Pero acá hay algo que te puede interesar</p>
			<a role="button" href="<?php the_permalink();?>">Llevame al contenido</a>
		</header>
	</div>
		<?php }  wp_reset_postdata(); ?>
<?php
get_footer();

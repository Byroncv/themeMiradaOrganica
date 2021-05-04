
<?php
//LAS ENTRADAS
get_header();
?>
<?php
 while(have_posts()){
        the_post();
 
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_post_thumbnail();?>
							<p><?php the_content()?></p>
						<?php } ?>
<?php
 	get_footer();
?>
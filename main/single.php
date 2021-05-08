<?php
//PUBLICACIÓN INDIVIDUAL
get_header();
?>
<?php
//Si hay post (publicaciones), retorne informacion
while (have_posts()) {
  the_post();
?>

<section class="single">
 
            
              <h1 class="singletitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              
                  <?php echo '<div class="singlethumbnail">'.get_the_post_thumbnail().'</div>';?>  
              <article class="singlearticle">
               
                <p><?php the_content();?></p>
                
              </article>
              <a role="button" href="<?php echo site_url('/blog/'); ?>" class="singlebutton">Volver al blog</a>
             
    
                  
      </section>
     
<?php
}
?>
<?php
get_footer();
?>
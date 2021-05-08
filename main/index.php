

<?php
//LAS ENTRADAS
get_header();
?>
<div id="principal">
				<h3>El comienzo de la salud es la nutrición</h3>
				<q><b><i>La nutrición es importante porque es fundamental para el funcionamiento y el mantenimiento de las funciones vitales de los seres vivos, ayuda a mantener el equilibrio homeostático del organismo, tanto en procesos macrosistémicos, como la digestión o el metabolismo.</i></b></q>
				<img src="<?php echo get_theme_file_uri('/img/piramide.jpeg');?>">
	</div>
		<div id="consejos">
			<h2 tabindex="0">¿Querés lograr una alimentación responsable?</h2>
			<h2 tabindex="0">Te regalamos estos tips</h2>
		</div>
<?php
 while(have_posts()){
        the_post();
 
?>			
		

	<section class="blog">
 
            
              <h1 class="blogtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              
                  <?php echo '<div class="blogthumbnail">'.get_the_post_thumbnail().'</div>';?>  
              <article class="blogarticle">
               
                <p><?php the_excerpt();?></p>
                
              </article>
              <a role="button" href="<?php the_permalink(); ?>" class="blogbutton">Leer más</a>
          </section>
			<?php } ?>
<?php
 	get_footer();
?>
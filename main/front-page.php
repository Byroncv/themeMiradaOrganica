<?php
//LA PÁGINA DE INICIO
get_header();
?>

			
		
		
			<!--call to action, boletín-->
			<div id="main" class="margen">
				<div id="fondo"></div>

				<main id="newsletter">
					<h1 id="mainh" tabindex="0">Alimentación Consciente</h1>
					<p tabindex="0">Antes de iniciar una transición, lo más importante es asesorarse con profesionales.</p>
					<p>¿Te gustaría recibir nuestro boletín?</p>
				<form action="" id="formboletin" method="post"  >
					<?php echo do_shortcode ('[contact-form-7 id="89" title="newsletter"]') ?>
				</form>
				</main>
			
		</div>
			 <div id="alertas">
             
        </div>

       

			<!--Termina call to action-->
			<!------------------------------------------------->
			<!--seccion de servicios-->
		<div id="servicios" class="margen">
			<h2 tabindex="0">Podés lograr una alimentación
				responsable</h2>
				<p>Sin dietas militares ni explotación animal</p>
		<div id="contenedorServicio">
			<section id="trans">	
				<h3 tabindex="0">Transición</h3>		
				<img src="<?php echo get_theme_file_uri('/img/icono_trans.png');?>" alt="Dieta de transición" loading="lazy">				
				<p>Te guiamos en el camino a una alimentación consciente de manera saludable y efectiva</p>
			</section>
			<section id="ases">
				<h3 tabindex="0">Asesoría</h3>			
				<img src="<?php echo get_theme_file_uri('/img/icono_aten.png');?>" alt="Asesoría nutricional" loading="lazy">
				<p>Explicamos paso a paso desde recetas hasta preguntas frecuentes </p>
			</section>
			<section id="taller">	
				<h3 tabindex="0">Talleres</h3>		
				<img src="<?php echo get_theme_file_uri('/img/icono_taller.png');?>" alt="Talleres mirada orgánica " loading="lazy">
				<p>Juntas podemos lograr tus metas para que logres alcanzar una vida plena</p>	
			</section>
		</div>
		</div>
		<!--termina la sección de servicios-->
		<!------------------------------------------------->
		<!--inicia la sección de opinion de clientes-->
			 <section id="opi">
			<h2>Testimonio</h2>
			
			<div id="cuadro">
				<img src="<?php echo get_theme_file_uri('/img/byron.jpg');?>" alt="Testimonio">
				<q>Rebeca es una excelente profesional, dedicada, apasionada y con un conocimiento increíble y al ser vegana por los animales da una sensación de confianza que no se encuentra en otro lugar.</q>
			</div>
			
		</section>
		<!--Termina la sección de opinion de clientes-->
		<!------------------------------------------------->
		<!--ínicia la sección de about me-->
	
		<section id="about" class="margen">
			
			<h2 tabindex="0">Soy la Licenciada Rebeca Coto </h2>
			<div id="becafoto" alt="Avatar de la lic. Rebeca"  tabindex="0" role="img" loading="lazy"> </div>
			<p tabindex="0">Nutricionista y activista por los derechos de los animales, graduada de la Universidad Hispanoamericana, es un placer ayudarte a tener una vida saludable y sin explotación animal.</p>

		</section>
		
	
			
	
		<!--termina la sección de about me-->
		
		<!------------------------------------------------->
		<!--Inicia formulario de contacto-->
		
			<section class="contactofondo ">
				<div style="background: rgba(0,0,0,0.5);">
			<blockquote>“La salud es una relación entre tu mente y tu cuerpo.”</blockquote>
		<?php
			$blog = new WP_Query(
              array(
                'post_type' => 'post', 
                'posts_per_page' => 3
      
              )
          );

         while ($blog->have_posts()) {
           $blog->the_post();
          ?>
	<div class="container1">	

  <div class="card1">
    <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle1">
 
      <img> <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail();?></a>
    </div>
  </div>
</div>
	<?php }  wp_reset_postdata(); ?>

       			</div>
			</section>
			<section id="contacto" >
			<h2 tabindex="0">Contáctenos</h2>
			
			<div id="formu">
				<?php echo do_shortcode ('[contact-form-7 id="75" title="Contacto"]') ?>
			</div>
		
		<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.9144960106937!2d-83.93453158520697!3d9.857540692948866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwNTEnMjcuMiJOIDgzwrA1NSc1Ni40Ilc!5e0!3m2!1sen!2scr!4v1619810878104!5m2!1sen!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div id="redes">
			<a href="https://www.instagram.com/miradaorganicanutri_20/"  target="_blank"><i class="fab fa-instagram" tabindex="0"></i></a>
			<a href="https://www.facebook.com/miradaorganicanutricion/"  target="_blank"><i class="fab fa-facebook-f" tabindex="0"></i></a>
			<a href="https://wa.me//50687922165" target="_blank"><i class="fab fa-whatsapp"></i> </a>
		</div>
		</section>
		<!--termina formulario de contacto-->
		
<?php            
get_footer();
?>
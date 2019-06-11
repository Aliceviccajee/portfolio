<?php /* Template name: Work */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="work">
  <div class="container">
    <div class="content">
    <h1>Examples of my work</h1>
   		<div class="grid">

   			<div class="cell">
          <div class="cell-text">
            <h2>Sapphire Gaming</h2>
     				<p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
     			</div>
   				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sapphire.png"/>
        </div>

     		<div class="cell">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/artlogic.png"/>
          <div class="cell-text">
            <h2>Artlogic</h2>
            <p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
          </div>
        </div>

        <div class="cell">
          <div class="cell-text">
            <h2>Lunche</h2>
            <p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lunche.png"/>
        </div>

        <div class="cell">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ice-bloc.png"/>
          <div class="cell-text">
            <h2>Ice Bloc</h2>
            <p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
          </div>
        </div>

      <div class="cell">
          <div class="cell-text">
            <h2>Pachamama</h2>
            <p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pachamama.png"/>
        </div>

        <div class="cell">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tabledash.png"/>
          <div class="cell-text">
            <h2>Tabledash</h2>
            <p>Sapphire Gaming is an online gaming platform. This static site was designed to grab the attention of investors. The concept behind the design was to create movement and flow. I added some parallax behaviours to eminate a gaming experience.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>

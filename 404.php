<?php /* 404 Page */
get_header(); ?>

<section class="four-oh-four">
  <div class="container">
    <div class="twelve columns">
      <div class="content">
        <h1>Page Not Found</h1>
        <p>Oh no you got lost! Don't worry here's a way <a href="<?php echo get_site_url(); ?>">home</a>.</p>
      </div>
    </div>
  	<div class="cats">
  		<img class="cat-one" alt="floating cat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat-one.png"/>
  		<img class="cat-two" alt="floating cat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat-two.png"/>
  		<img class="cat-three" alt="floating cat" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat-three.png"/>
  	</div>
  </div>
</section>

<?php get_footer(); ?>
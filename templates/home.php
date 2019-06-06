<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>

<section class="home">
  <div class="container">
    <div class="logo-area">
      <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/av-logo.svg"/>
    </div>
    <div class="content">
    <h1>Alice Viccajee</h1>
      <div class="typewriter"><h2><<span> web developer</span> > </h2></div>
      <p>&#60;<span>p</span>&#62;
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.Officia autem alias adipisci explicabo ea beatae? Reiciendis, officia perferendis consequatur neque aperiam, facilis magni nam voluptate porro, nihil atque! Dolorem, impedit? &#60;<span>/p</span>&#62; </p>
      <ul>
        <li><a href="">Work</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
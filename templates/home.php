<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>

<section class="home">
  <div class="container">
    <div class="content">
    <h1>alice viccajee</h1>
      <div class="typewriter"><h2>< <span>web developer</span> ></h2></div>
      <p>&#60;<span>p</span> <span class="green">class</span>=<span class="yellow">"about"</span>&#62;
        Hello I'm Alice, I am a Front end web developer. &#60;<span>/p</span>&#62; </p>
      <ul>
        <li><a href="<?php echo get_site_url(); ?>/work">Work</a></li>
        <li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>
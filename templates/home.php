<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>


<?php 
$title = get_field('title');
$intro = get_field('intro');
$about = get_field('about');
$about_title = get_field('about_title');
$contact_title = get_field('contact_title');
$email = get_field('email');
?>

<section class="home">
  <div class="container section__constrained">
    <div class="content">
      <div class="title">
        <div class="logo">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="about">
          <h2><?php echo $about_title; ?></h2>
          <?php echo $about; ?>

          <h2><?php echo $contact_title; ?></h2>
          <div class="email"><a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a></div>
          <?php
            $cv = get_field('cv');
            if( $cv ): ?>
                <div class="cv">
                  <a target="blank" href="<?php echo $cv['url']; ?>">Take a peek at my CV</a>
                </div>
            <?php endif; ?>
        </div>
      </div>
        <h2 class="work-title">Work</h2>
        <div class="grid">
        <?php 
            if( have_rows('portfolio') ):
            while( have_rows('portfolio') ) : the_row();
            $title = get_sub_field('title');
            $copy = get_sub_field('discription');
            $img = get_sub_field('image');
            $cta = get_sub_field('link');
            if( $cta ):
              $cta_url = $cta['url'];
              ?>

            <?php endif; ?>
            <div class="list-item">
              <a target="blank" href="<?php echo esc_url( $cta_url ); ?>"><?php 
              if( $img ) {
                echo wp_get_attachment_image( $img['id'], $size );
              }
              ?></a>
              <div class="middle">
                <a target="blank" href="<?php echo esc_url( $cta_url ); ?>"><div class="visit">Visit</div></a>
              </div>
              <div class="project-title"><a target="blank" href="<?php echo esc_url( $cta_url ); ?>"><?php echo $title; ?></a></div>       
              <div class="copy"><?php echo $copy; ?></div>  
            </div>
            <?php
            endwhile;
          endif;
          ?>
      </div>
  </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>
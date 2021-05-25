<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>


<?php 
$title = get_field('title');
$intro = get_field('intro');
?>

<section class="home">
  <div class="container section__constrained">
    <div class="content">
      <div class="title">
        <div class="logo"><h1><?php echo $title; ?></h1></div>
        <?php echo $intro; ?>
      </div>
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
              <div class="title"><a target="blank" href="<?php echo esc_url( $cta_url ); ?>"><?php echo $title; ?></a></div>       
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
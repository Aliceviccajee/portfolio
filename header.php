<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
<link rel="icon" sizes="192x192"
  href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>
<?php wp_head(); ?>
<body <?php body_class($color); ?>>
<header class="fixed_header">
  <div class="container"> 
    <div class="logo four columns">  
      <?php if ( is_front_page() ) { echo '<h1 class="site-title">'; } else { echo '<p class="site-title">'; } ?>
      <?php if ( is_front_page() ) { echo '</h1>'; } else { echo '</p>'; } ?>
    </div>
    <!-- Main Menu -->
    <?php // wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
  </div>
</header>
</div>
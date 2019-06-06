<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
<?php wp_head(); ?>
<body <?php body_class($color); ?>>
<header class="fixed_header">
  <div class="container"> 
    <div class="logo four columns">  
      <?php if ( is_front_page() ) { echo '<h1 class="site-title">'; } else { echo '<p class="site-title">'; } ?>
      <?php if ( is_front_page() ) { echo '</h1>'; } else { echo '</p>'; } ?>
    </div>
    <!-- Mobile Menu Trigger -->
    <div class="mobile_menu"></div>
    <!-- Main Menu -->
    <nav class="primary eight columns">
      <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
    </nav>
  </div>
</header>
<!-- Mobile Menu -->
<nav class="mobile seven columns">
  <?php wp_nav_menu( array( 'theme_location' => 'mobile_main' ) ); ?>
</nav>
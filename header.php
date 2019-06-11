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
    <!-- Main Menu -->
    <?php // wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
  </div>
</header>
<!-- Mobile Menu -->
<div class="sidebar">
  <ul>
    <li class="folders">FOLDERS</li>
    <li><a href="<?php echo get_site_url(); ?>"><span>x</span> home.html</a></li>
    <li><a href="<?php echo get_site_url(); ?>/work"><span>&nbsp &nbsp &nbsp/ *</span> _work.scss</a></li>
    <li><a href="<?php echo get_site_url(); ?>/contact"><span>&nbsp &nbsp &nbsp/ *</span> _contact.scss</a></li>
  </ul>
  <div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <button class="sidebarBtn">
    <span></span>
  </button>
</div>
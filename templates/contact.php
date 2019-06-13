<?php /* Template name: Contact */
get_header(); 
$email = "alice@viccajee.com";
?>

<section class="contact">
  <div class="container">
  	<div class="text">
	    <h1>Contact</h1>
	    <h2>If you would like to talk to me about a project please email <?php if($email) { echo '<a class="email" href="mailto:'. antispambot($email,1) . '">' . $email . '</a>';} ?></h2>
	  	</div>
  </div>
</section>

<?php get_footer(); ?>
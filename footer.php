<?php /* Footer */ ?>
<?php wp_footer(); ?>
  <footer>
    <div class="container footer__inner">
      <div class="contact">
        <p>Say Hello</p>
        <a href="mailto:alice@viccajee.com">alice@viccajee.com</a>
        <a href="https://www.instagram.com/amviccajee/" target="_blank"><img class="instagram" alt="instagram link" src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.svg"/></a>
        <?php
        $cv = get_field('cv');
        if( $cv ): ?>
            <a target="blank" href="<?php echo $cv['url']; ?>">Have a look at my CV</a>
        <?php endif; ?>
      </div>
    </div>
  </footer>
</body>
</html>
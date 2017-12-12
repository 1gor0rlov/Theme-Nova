<footer class="footer-2 bg-dark text-center-xs">
  <div class="container">
    <div class="row">
      <ul id="sidebar" class="list-inline">
       <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		   <?php dynamic_sidebar( 'sidebar-1' ); ?>
       <?php endif; ?>
     </ul>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <a href="#"><img class="image-xxs fade-half" alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png"></a>
      </div>

      <div class="col-sm-4 text-center">
        <span class="fade-half">
          © Copyright 2015 Medium Rare - All Rights Reserved
        </span>
      </div>

      <div class="col-sm-4 text-right text-center-xs">
        <ul class="list-inline social-list">
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-dribbble"></i></a></li>
          <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<?php wp_footer(); ?>

</body>
</html>

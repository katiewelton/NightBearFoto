<?php $site_options = new SiteOptions(); ?>

<section class="footer-bar">

  <nav class="footer-nav">
    <?php
    wp_nav_menu([
      'theme_location' => 'footer_menu',
      'container' => false,
      'menu_class' => 'footer-menu'
    ]);

    get_template_part('templates/social-links', 'tpl');
    ?>
  </nav>

</section>

<?php
$site_options = new SiteOptions;
$site_options->field('company_logo');
?>

<header class="sticky">
  <div class="page-width">
    <a href="<?php echo get_home_url(); ?>" class="logo">
      <img src="<?php echo $site_options->field('company_logo'); ?>" />
    </a>
    <button class="burger-menu js-menu-trigger">X</button>

    <nav>
      <?php
        wp_nav_menu([
          'theme_loction' => 'main_menu',
          'container' => false,
          'menu_class' => 'main-menu'
        ]);
      ?>
    </nav>

    <?php get_template_part('templates/social-links', 'tpl'); ?>

  </div>
</header>

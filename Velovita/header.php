<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?ver=<?php echo time(); ?>"></script>

<body <?php body_class(); ?>>

<header>
  <div class="header-inner">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" height="32" />
    </a>

    <nav>
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false
      ]); ?>
    </nav>

    <a href="#" class="signin">Sign In</a>
  </div>
</header>


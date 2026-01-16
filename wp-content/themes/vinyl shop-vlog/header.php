<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('template-parts/Sign-In'); ?>
<?php get_template_part('template-parts/Register'); ?>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-inner">
    
    <div class="header-left">
      <a href="<?php echo home_url(); ?>" class="logo">LOGO</a>
    </div>

    <div class="header-right">
        <a href="<?php echo home_url('/Blog'); ?>" class="signin-btn">Posts</a>
        <a href="<?php echo home_url('/'); ?>" class="signin-btn">Products</a>
        <button onclick="openLoginPopup()">Sign In</button>
        <button onclick="openRegisterPopup()">Register</button>

    </div>

  </div>
  
</header>

<main class="site-main">

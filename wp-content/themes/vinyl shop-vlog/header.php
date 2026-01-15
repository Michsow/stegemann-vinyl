<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
        <a href="#" class="signin-btn">Posts</a>
        <a href="#" class="signin-btn">Products</a>
        <a href="#" class="signin-btn">Sign in</a>
        <a href="#" class="register-btn">Register</a>
    </div>

  </div>
</header>

<main class="site-main">

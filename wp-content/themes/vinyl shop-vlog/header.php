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
        <a href="<?php echo home_url('/Blog'); ?>" class="signin-btn">Posts</a>
        <a href="<?php echo home_url('/'); ?>" class="signin-btn">Products</a>
        <button onclick="openLoginPopup()">Sign In</button>
        <button onclick="openRegisterPopup()">Register</button>

    </div>

  </div>
<div id="auth-popup-login" class="auth-overlay">
  <div class="auth-box">
    <span class="close-popup" onclick="closeLoginPopup()">×</span>

    <form id="login-form" class="auth-form active">
      <label>Email</label>
      <input id="login-email" type="email" placeholder="Value" required>

      <label>Password</label>
      <input id="login-password" type="password" placeholder="Value" required>

      <button type="submit" class="auth-btn">Sign In</button>
      <a href="<?php echo wp_lostpassword_url(); ?>" class="forgot">Forgot password?</a>
      <p id="login-msg"></p>
    </form>
  </div>
</div>


<div id="auth-popup-register" class="auth-overlay">
  <div class="auth-box">
    <span class="close-popup" onclick="closeRegisterPopup()">×</span>

    <form id="register-form" class="auth-form active">
      <label>Email</label>
      <input id="reg-email" type="email" placeholder="Value" required>

      <label>Password</label>
      <input id="reg-password" type="password" placeholder="Value" required>

      <button type="submit" class="auth-btn">Register</button>
      <p id="register-msg"></p>
    </form>
  </div>
</div>

  
</header>

<main class="site-main">

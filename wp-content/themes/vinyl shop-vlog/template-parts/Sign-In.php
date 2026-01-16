<div id="auth-popup-login" class="auth-overlay">
  <div class="auth-box">
    <span class="close-popup" onclick="closeLoginPopup()">×</span>

    <form id="login-form" class="auth-form active">
      <label>Email</label>
      <input id="login-email" type="email" placeholder="Write your email" required>

      <label>Password</label>
      <input id="login-password" type="password" placeholder="Write your password" required>

      <button type="submit" class="auth-btn">Sign In</button>
      <a href="<?php echo wp_lostpassword_url(); ?>" class="forgot">Forgot password?</a>
      <p id="login-msg"></p>
    </form>
  </div>
</div>
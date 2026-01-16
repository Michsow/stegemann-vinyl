
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
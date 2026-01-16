</main>

<footer class="site-footer">
    <p>© <?php echo date("Y"); ?> Stegemann Vinyl</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<script>
const popup = document.getElementById('auth-popup');
function openPopup(){ popup.style.display = 'flex'; }
function closePopup(){ popup.style.display = 'none'; }

document.querySelectorAll('.tab-btn').forEach(btn=>{
  btn.onclick = () => {
    document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('active'));
    document.querySelectorAll('.auth-form').forEach(f=>f.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(btn.dataset.tab+"-form").classList.add('active');
  };
});

// AJAX LOGIN
document.getElementById('login-form').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const res = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
    method:'POST',
    headers:{'Content-Type':'application/x-www-form-urlencoded'},
    body:new URLSearchParams({
      action:'ajax_login',
      email:document.getElementById('login-email').value,
      password:document.getElementById('login-password').value
    })
  });
  const data = await res.json();
  document.getElementById('login-msg').textContent = data.message;
  if(data.success){ location.reload(); }
});

// AJAX REGISTER
document.getElementById('register-form').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const res = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
    method:'POST',
    headers:{'Content-Type':'application/x-www-form-urlencoded'},
    body:new URLSearchParams({
      action:'ajax_register',
      email:document.getElementById('reg-email').value,
      password:document.getElementById('reg-password').value
    })
  });
  const data = await res.json();
  document.getElementById('register-msg').textContent = data.message;
});
</script>
<script>
function openLoginPopup(){
  document.getElementById('auth-popup-login').style.display = 'flex';
}

function closeLoginPopup(){
  document.getElementById('auth-popup-login').style.display = 'none';
}

function openRegisterPopup(){
  document.getElementById('auth-popup-register').style.display = 'flex';
}

function closeRegisterPopup(){
  document.getElementById('auth-popup-register').style.display = 'none';
}

// OPTIONAL: Close on overlay click
document.addEventListener('click', (e) => {
  if (e.target.classList.contains('auth-overlay')) {
    e.target.style.display = 'none';
  }
});
</script>

<?php
add_action('wp_ajax_nopriv_ajax_login', 'ajax_login');
add_action('wp_ajax_nopriv_ajax_register', 'ajax_register');

function ajax_login() {
    // AJAX LOGIN
add_action('wp_ajax_nopriv_ajax_login', 'ajax_login');
function ajax_login() {
    $creds = array(
        'user_login'    => sanitize_email($_POST['email']),
        'user_password' => $_POST['password'],
        'remember'      => true
    );
    $user = wp_signon($creds, false);

    if (is_wp_error($user)) {
        wp_send_json(['success'=>false,'message'=>$user->get_error_message()]);
    } else {
        wp_send_json(['success'=>true,'message'=>'Login successful! Redirecting...']);
    }
}
}
function ajax_register() {

// AJAX REGISTER
add_action('wp_ajax_nopriv_ajax_register', 'ajax_register');
function ajax_register() {
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];

    if (email_exists($email)) {
        wp_send_json(['success'=>false,'message'=>'Email already exists']);
    }

    $user_id = wp_create_user($email, $password, $email);

    if (is_wp_error($user_id)) {
        wp_send_json(['success'=>false,'message'=>$user_id->get_error_message()]);
    }

    wp_send_json(['success'=>true,'message'=>'Account created! Please log in.']);
}

}


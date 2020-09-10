<?php
/**
* Customise the log-in page and admin dashboard area logo 
*/

function my_login_logo() { ?>
  <style type="text/css">
  /* #login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg);
    height:auto;
    width:320px;
    background-size: contain;
    background-repeat: no-repeat;
    padding-bottom: 50px;
  }
  body.login {
    background: #000;
  }
  body.login form {
    background: #fff;
    box-shadow: 0 5px 30px 0 rgba(255, 255, 255, 0.17);
  }

  body.login form label {
    color: #000;
  }

  body.login form input[type="text"],
  body.login form input[type="password"],
  body.login form input[type="checkbox"] {
    background: #fff !important;
  }
  body.login form input[type="submit"] {
    background: #000 !important;
    border-color: #000 !important;
    transition: all 0.4s ease !important;
    text-shadow: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
  }

  body.login form input[type="submit"]:hover {
    background: #fff !important;
    color: #000 !important;
    text-shadow: none !important;
  }

  .login #backtoblog a, .login #nav a {
    color: #fff !important;
    transition: color 0.4s ease;
  }

  .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
    color: #fff !important;
  } */

  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function wpb_custom_logo() {

echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/custom-logo.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}

add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

?>

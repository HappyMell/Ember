<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>


<?php $header = get_field('header_settings', 'option')?>
    <div class="page-wrapper">

    <header class="page-header">
        <div class="page-header__nav">
          <div class="page-header__nav--column">
            <div class="navbar-top">
              <a class="navbar-top__logo">
                <img
                  src="<?php echo $header['logo']?>"
                />
              </a>
              <div class="menu-button">
                <button class="hamburger">
                  <span>Menu</span>
                </button>
              </div>
            </div>
            <div class="social-links">
            <?php foreach($header['social_links'] as $social) { ?>
               <a class="social-links__item" href="<?php echo $social['link']?>">
               <img
                 class="logo"
                 src="<?php echo $social['images']?>"
               />
             </a>

          <?php  }?>
             
            
            </div>
          </div>
          <div class="nav-menu" id="menu">
            <div class="nav-menu__wrapper">
              <div class="nav-menu__wrapper--container">
                <div class="vert-grid">
                <?php wp_nav_menu( array( 
        'menu' => 'main-menu',
            
        ) ); ?>
                  <div class="divider"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
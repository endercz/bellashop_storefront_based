<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Bellashop - Sewing products shop">
    <meta name="keywords" content="shop, e-commerce, sewing, bags, wallets">
    <meta name="author" content="Hanus Hasl">

    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor.min.css">

    <!-- Theme stylesheet -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" media="screen">

    <?php wp_head(); ?>
  </head>
  <!-- Body -->
  <body>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@bellashop.ch</a><a class="hidden-md-down" href="tel:0041786893241"><i class="icon-bell"></i>&nbsp; 00 41 78 689 32 41</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle">
            <span class="language"><img alt="German" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/DE.png"></span><span class="currency">CHF</span>
          </div>
          <div class="dropdown-menu">
            <div class="currency-select">
              <select class="form-control form-control-rounded form-control-sm">
                <option value="chf">CHF</option>
                <option value="czk">&#x4b;&#x10d;</option>
              </select>
            </div>
            <a class="dropdown-item" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/CZ.png" alt="Czech">Česky</a>
            <a class="dropdown-item" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/DE.png" alt="Deutsch">Deutsch</a>
            <a class="dropdown-item" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/GB.png" alt="English">English</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Menu -->
    <header class="navbar navbar-sticky">
      <!-- Site Branding -->
      <div class="site-branding">
        <div class="inner">
          <!-- Site Logo--><a class="site-logo" href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo.png" alt="Unishop"></a>
        </div>
      </div>
      <nav class="site-menu">
        <ul>
          <?php
            $args = array(
              'theme_location' => 'primary',
              'container' => false,
              'items_wrap' => '%3$s',
              'walker' => new Bellashop_Nav_Walker(),
            );

            wp_nav_menu($args);
          ?>
        </ul>
      </nav>

      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
            <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-user">
                  <!-- <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams"> -->
                  <!-- </div> -->
                  <div class="user-info">
                    <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                  </div>
                </li>
                  <li><a href="account-profile.html">My Profile</a></li>
                  <li><a href="account-orders.html">Orders List</a></li>
                  <li><a href="account-wishlist.html">Wishlist</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
              </ul>
            </div>
            <?php do_action('bellashop_header_mini_cart'); ?>
          </div>
        </div>
      </div>
    </header>
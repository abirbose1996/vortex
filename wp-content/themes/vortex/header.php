<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gallery.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet" media="all">
    
  </head>
  <body>
    
    <header class="header-wrapper">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-lg-4 col-lg-8">
                        <div class="head-cont-info">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </span>
                                    <p><?php dynamic_sidebar( 'header_area_one' ); ?></p>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </span>
                                    <p><a href=""><?php dynamic_sidebar( 'header_area_two' ); ?></a></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                      <div class="logo-wrap">
                          <a class="navbar-brand" href="index.html">
                            <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="">
                          </a>
                      </div>
                      
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                      <?php 

                          $header = array(
                          'theme_location'  => '',
                          'menu'            => 'header-menu',
                          'container'       => 'navbar',
                          'container_class' => '',
                          'container_id'    => '',
                          'menu_class'      => 'navbar-nav',
                          'menu_id'         => '',
                          'echo'            => true,
                          'fallback_cb'     => 'wp_page_menu',
                          'before'          => '',
                          'after'           => '',
                          'link_before'     => '',
                          'link_after'      => '',
                          'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                          'depth'           => 0,
                          // 'walker'        => new bootstrap_navwalker()
                          );

                          wp_nav_menu( $header );

                          ?>          


                      </div>

                      <div class="head-call-wrap">
                            <div class="icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="info">
                                <h5>Quick Contact</h5>
                                <p><a href="tel:0450 832 397"> 0450 832 397</a></p>
                            </div>
                      </div>
                      
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                      </button>
                    </nav>
                </div>
            </div>
        </div>

    </header>
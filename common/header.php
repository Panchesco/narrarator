<!DOCTYPE html>
<html  lang="<?php echo get_html_lang(); ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php if ($author = option('author')): ?>
  <meta name="author" content="<?php echo $author; ?>" />
  <?php endif; ?>
  <?php if ($copyright = option('copyright')): ?>
  <meta name="copyright" content="<?php echo $copyright; ?>" />
  <?php endif; ?>
  <?php if ( $description = option('description')): ?>
  <meta name="description" content="<?php echo $description; ?>" />
  <?php endif; ?>
    <?php
  if (isset($title)) {
      $titleParts[] = strip_formatting($title);
  }
  $titleParts[] = option('site_title');
  ?>
  <title><?php echo implode(' &middot; ', $titleParts); ?></title>
  
  <?php echo auto_discovery_link_tags(); ?>
  
  <!-- Plugin Stuff -->
  <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

  <!-- Favicons -->
  <link href="/themes/narrarator/assets/img/favicon.png" rel="icon">
  <link href="/themes/narrarator/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('public','style'));
    echo head_css();
    
    echo theme_header_background();
    ?> 
  <link href="/themes/narrarator/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/themes/narrarator/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/themes/narrarator/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/themes/narrarator/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/themes/narrarator/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/themes/narrarator/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="/themes/narrarator/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- JavaScripts -->
  <?php 
  queue_js_file(array('jquery-accessibleMegaMenu', 'globals'));
  echo head_js(); 
  ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<div id="skipnav">
    <a href="#content" class="sr-only sr-only-focusable"><?php echo __('Skip to main content'); ?></a>
</div>
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

  <!-- ======= Top Bar ======= -->
  <!-- section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section //-->
  
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="d-none d-md-block ms-auto">
        <a href="#" class="twitter">English</a>
        <a href="#" class="facebook">Español</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><?php echo option('site_title');?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="/themes/narrarator/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1><?php echo option('site_title');?></h1>
      <?php if ( $description = option('description')): ?>
      <h2><?php echo $description; ?></h2>
      <?php endif; ?>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>

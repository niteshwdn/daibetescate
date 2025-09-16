<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <?php wp_head() ?>
</head>

<body>

  <header id="header" class="header sticky-top shadow">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo get_theme_mod('rs_email') ?>"><?php echo get_theme_mod('rs_email') ?></a></i>
          <a href="tel:<?php echo get_theme_mod('rs_contact_number'); ?>">
          <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo get_theme_mod('rs_contact_number') ?></span></i>
</a>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="<?php echo get_theme_mod('rs_facebook') ?>" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?php echo get_theme_mod('rs_instagram') ?>" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo get_theme_mod('rs_linkedin') ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="<?php echo get_theme_mod('rs_twitter') ?>" class="twitter"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?php echo site_url() ?> " class="logo d-flex align-items-center me-auto">
          <img src="<?php echo get_theme_mod('rs_logo' ) ?>" alt="">
          <h1 class="sitename"><?php echo get_theme_mod('rs_text') ?></h1>
        </a>

       <nav id="navmenu" class="navmenu">
         <?php 
       wp_nav_menu([
      'theme_location' => 'primary_menu',
      'container'      => false,
      'menu_class'     => 'navmenu',
       ]);
         ?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

        <a style="width: 20%;" href=""></a>

      </div>

    </div>

  </header>
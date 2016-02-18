<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php wp_title(''); ?>
      <?php if (wp_title('', false)) {
    echo ' : ';
} ?>
        <?php bloginfo('name'); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/icon/manifest.json">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon.ico">
  <meta name="msapplication-TileColor" content="#22a7f0">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icon/mstile-144x144.png">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/images/icon/browserconfig.xml">
  <meta name="theme-color" content="#22a7f0"> 
  <!--  TODO: OG -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  <!--  header START -->
  <header class="c-header js-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <div class="o-wrapper">
      <!--  nav START -->
      <nav class="c-nav c-nav--desktop js-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <?php pind_nav(); ?>
      </nav>
      <!--  nav END-->

      <a href="#" class="c-nav__trigger js-toggle-nav">Menu <span class="c-nav__icon"></span></a>

      <!--  Logo START -->
      <a href="<?php echo home_url() ?>" class="c-logo c-logo--header">
        <?php bloginfo('name'); ?>
      </a>
      <!--  Logo END -->
    </div>
  </header>
  <!--  header END -->

  <!--  mobile-nav START -->
  <nav class="c-nav c-nav--mobile" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <a href="<?php echo home_url() ?>" class="c-logo c-logo--mobile-nav">
      <?php bloginfo('name'); ?>
    </a>
    <?php pind_nav(); ?>
  </nav>
  <!--  mobile-nav END-->

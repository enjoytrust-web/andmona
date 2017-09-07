<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="robots" content="index,follow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>and_mona</title>

  <!-- StyleSheet -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/lib/css/style.css">

    <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="">
  <link rel="icon" type="image/png" href="" sizes="32x32">
  <link rel="icon" type="image/png" href="" sizes="16x16">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- OGP -->
  <!-- Facebook -->
    <meta property="fb:admins" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
  <!-- Twitter -->
    <meta name="twitter:site" value="">
    <meta name="twitter:creator" value="">
    <meta name="twitter:card" value="">
  <!-- Google+ -->
    <link rel="author" href="">
</head>

<body>

<header class="l-header">

  <nav class="g-nav">
    <ul class="g-nav-list">
      <li class="g-nav-listin">
        <a href="<?php echo home_url();?>" class="g-nav-listin-item">
          HOME
        </a>
        <!-- <a href="" class="g-nav-listin-item">
          COLLECTION
        </a> -->
        <a href="<?php echo home_url();?>/#newarrival" class="g-nav-listin-item">
          NEW ARRIVAL
        </a>
        <a href="<?php echo home_url();?>/category" class="g-nav-listin-item">
          CATEGORY
        </a>
        <a href="" class="g-nav-listin-item">
          PICK UP
        </a>
        <a href="<?php echo home_url();?>#storeinfo" class="g-nav-listin-item">
          STORE INFO
        </a>
        <a href="<?php echo home_url();?>/contact" class="g-nav-listin-item">
          CONTACT
        </a>
      </li>
    </ul>
  </nav>

  <div class="trigger-wrapper">
    <div class="trigger-line"></div>
    <div class="trigger-line"></div>
    <div class="trigger-line"></div>
  </div>

</header>

<!-- ▼ write your contents ▼ -->

<?php wp_head(); ?>
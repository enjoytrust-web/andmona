<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="robots" content="index,follow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>&amp;mona</title>

  <!-- StyleSheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/css/slick.css">

    <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>

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

<body onload="initialize();">
<!-- ▼ write your contents ▼ -->
  <section>
    <div class="l-wrapper">
      <div class="l-container position_center">
        <div class="l-row">
          <div class="l-grid-12 padding0">
            <div class="border">
              <div class="img_mainvisual">
                <img src="<?php bloginfo('template_url'); ?>/lib/image/mainvisual.png" alt="&amp;mona">
              </div>
              <div class="scroll">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                <p>Scroll</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="l-wrapper">
      <div class="l-container position_center">
        <div class="l-row">
          <div class="l-grid-12 padding0">
            <h1 class="logo">
              <img src="<?php bloginfo('template_url'); ?>/lib/image/logo.png" alt="&amp;mona">
            </h1>
            <h2 class="semititle">sports &times; music &times; fashion</h2>
            <p class="about_text">スポーツ、音楽、ファッションの３要素を融合させて独自の新しい形に...</p>
            <p class="about_text">高感度のナイトクラバーにクラブファッションとライフスタイルを提案します</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="l-wrapper">
      <div class="l-container position_center">
        <div class="l-row">
          <div class="l-grid-3 padding0 item_border">
            <div class="item_textbox">
              <h3 class="item_text">Gallery</h3>
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item1">
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item2">
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item3">
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item4">
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item5">
            </div>
          </div>
          <div class="l-grid-3 padding0">
            <div class="img_item item6">
            </div>
          </div>
          <div class="l-grid-3 padding0 item_border">
            <a href="#" class="item_textbox">
              <h3 class="item_text">
                <span>See all</span>
                <i class="fa fa-long-arrow-right arrow" aria-hidden="true"></i>
              </h3>
            </a>
          </div>
        </div>
        </div>
    </div>
  </section>


  <section>
    <div class="l-wrapper">
      <div class="l-container position_center">
        <div class="l-row">
          <div class="l-grid-6 padding0 map_wrapper">
            <div class="shopinfo_wrapper">
              <h3 class="shopinfo_title">
                <span>SHOP INFO</span>
                取り扱い店舗
              </h3>
              <ul class="shopinfo_discription">
                <li>
                  <span>SHOP NAME</span>
                  Club Ammona ( http://ammona.jp/ )
                </li>
                <li>
                  <span>Tel</span>
                  06-6211-3993
                </li>
                <li>
                  <span>Adress</span>
                  〒542-0083 大阪市中央区東心斎橋2-3-22玉八ビル
                </li>
              </ul>
            </div>
          </div>
          <div class="l-grid-6 padding0 map_wrapper">
              <div class="googlemap" id="googlemap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="l-wrapper l-footer">
      <div class="l-container">
        <div class="l-row">
          <div class="l-grid-12 padding0">
            <ul class="sns">
              <li>
                <a href="https://twitter.com/and_mona_info">
                  <i class="fa fa-twitter sns_icon" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-facebook sns_icon" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/and_mona_/">
                  <i class="fa fa-instagram sns_icon" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
            <h4 class="copyright">&copy; 2017 &amp;mona</h4>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="<?php bloginfo('template_url'); ?>/lib/js/app.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCJySDnXDlK5mSo9CPSOOUXvywXEo9wAGM"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/js/map.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/lib/js/jquery.scrollify.min.js"></script>
</body>
</html>
<?php get_footer(); ?>
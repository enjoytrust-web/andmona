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
  <link rel="stylesheet" href="lib/css/style.css">
  <link rel="stylesheet" href="lib/css/slick.css">

    <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>

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
<!-- ▼ write your contents ▼ -->

  <section class="l-wrapper">
    <div class="l-container">
      <div class="l-row">
        <div class="l-grid-12 padding0">
          <div class="border">
            <div class="img_mainvisual">
              <img src="lib/image/mainvisual.png" alt="&amp;mona">
            </div>
            <!--
            <div class="scroll">
              <a href="#about"><span></span>Scroll</a>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="l-wrapper">
    <div class="l-container">
      <div class="l-row">
        <div class="l-grid-12 padding0">
          <h1>
            <img src="lib/image/logo.png" alt="&amp;mona">
          </h1>
          <h2>sports &times; music &times; fashion</h2>
          <p>スポーツ、音楽、ファッションの３要素を融合させて独自の新しい形に...</p>
          <p>高感度のナイトクラバーにクラブファッションとライフスタイルを提案します</p>
        </div>
      </div>
    </div>
  </section>


  <section class="l-wrapper">
    <div class="l-container">
      <div class="l-row">
        <div class="l-grid-3 item padding0">
          <div class="item_text">
            <h3 class="gallery">Gallery</h3>
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <div class="img_item">
          </div>
        </div>
        <div class="l-grid-3 item padding0">
          <a href="#" class="item_text">
            <h3 class="gallery">See all</h3>
          </a>
        </div>
      </div>
      </div>
  </section>


  <section class="l-wrapper">
    <div class="l-container">
      <div class="l-row">
        <div class="l-grid-6 padding0 height50vh">
          <h3 class="shop_info">
            <span>SHOP INFO</span>
            取り扱い店舗
          </h3>
          <ul class="shop_info_list">
            <li>
              <span>SHOP NAME</span>
              Club Ammona
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
        <div class="l-grid-6 padding0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3607957753543!2d135.50243786523134!3d34.67084248044212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e715ba91f8a1%3A0x4302417c97c3d721!2z44CSNTQyLTAwODMg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy65p2x5b-D5paO5qmL77yS5LiB55uu77yT4oiS77yS77ySIOeOieWFq-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1496395752080" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>


<!--<script src="js/app.js"></script>-->
<script>
  $(function(){
  $('a[href^=#]').click(function(){
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
</script>
</body>
</html>
<?php get_footer(); ?>
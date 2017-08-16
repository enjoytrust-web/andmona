<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->

<section class="porodcts-wrapp">

  <div class="l-full">
    <div class="l-grid-8">
      <img class="products-pics" src="<?php bloginfo('template_url');?>/lib/image/item_mirror_20170702.jpg" alt="Compact Mirror">
    </div><!-- glid END -->

    <div class="l-grid-4">
      <div class="priducts-text-box">

        <div class="products-text-boxin-box op-products-text-boxin-box-height-1">
          <div class="products-text-boxin-sns-widthbox">
            <p class="products-text-boxin-sns-text">SHARE ON：</p>
            <ul class="sns_btn">
                <li class="sns_btnInner">
                  <a class="sns_btnInner-link sns-btn-twitter" href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterで共有">
                  </a>
                </li>

                <li class="sns_btnInner">
                  <a class="sns_btnInner-link sns-btn-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookで共有">
                  </a>
                </li>

                <li class="sns_btnInner">
                  <a class="sns_btnInner-link sns-btn-line" href="http://line.naver.jp/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>" target="_blank" title="LINEで送る">
                  </a>
                </li>
            </ul>
          </div><!-- products-text-boxin-sns-widthbox -->
        </div><!-- products-text-boxin-sns END -->

        <div class="products-text-boxin-box op-products-text-boxin-box-height-2">
          <div class="products-text-boxin-box-details-widthbox">
            <h2 class="products-text-boxin-details-name">Compact Mirror</h2>
            <div class="underborder"></div>
            <div class="make-space"></div>
            <p class="products-text-boxin-details-price">￥1,000</p>
            <div class="make-space"></div>
            <p class="products-text-boxin-details-text">シックでシンプルなAmmonaロゴ入りコンパクトミラー</p>
            <div class="make-space"></div>
            <div class="products-text-boxin-details-box">
              <p class="products-text-boxin-details-boxin-item">Color</p>
              <div class="products-text-boxin-details-boxin-color" title="Black">
                <div class="products-text-boxin-details-boxin-colorin-bg"></div>
              </div>
              <div class="make-space"></div>
              <p class="products-text-boxin-details-boxin-item">Size</p>
              <div class="products-text-boxin-details-boxin-size">S</div>
            </div>
            <div class="make-space"></div>
            <a href="#" class="products-text-boxin-contact">
              <p class="products-text-boxin-contact-text">お問い合わせ</p>
            </a>
          </div><!-- products-text-boxin-details END -->
        </div><!-- products-text-boxin-box-details-widthbox END -->

      </div><!-- priducts-text-box END -->
    </div><!-- glid END -->
  </div><!-- l-full END -->

</section>

<?php get_footer(); ?>
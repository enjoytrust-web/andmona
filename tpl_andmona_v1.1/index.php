<?php get_header(); ?>

<article class="content-wrapper">

<section class="section-is-mainvisual">
  <!-- <div class="mainvisual-backscreen"></div> -->
  <div class="l-container main-visual-container">
    <div class="l-row main-visual-container-text-unit">
      <div class="l-right-grid-12">
        <p class="brand-name">&amp;mona</p>
        <p class="brand-maincatch">A WORLD OF DREAMS BRINGING HAPPINESS</p>
        <!-- <a href="#" class="ghostbutton">COLLECTION</a> -->
      </div>
    </div>
  </div>
</section>

<section class="l-wrapper section-chapter">
  <div class="section-chapter-screen section-chapter-concept""></div>
  <div class="l-container">
    <div class="l-row">
      <div class="l-grid-8 l-offset-left-2">
        <h2 class="section-header section-header-lighten">
          ABOUT
          <span class="section-header-jp">ブランドコンセプト</span>
        </h2>
        <p class="maincatch">SPORTS × MUSIC × FASHION</p>
        <p class="subcatch">スポーツ。音楽。そしてファッション。３要素を融合させた新しいカタチ。エネルギッシュかつファッショナブルな高感度のナイトクラバー達へ。次世代のクラブファッションと新しいライフスタイルを提案します。</p>
      </div>
    </div>
  </div>
</section>


<section class="l-wrapper" style="background:#f1f1f1;">
  <h2 class="section-header">
    NEW ARRIVAL
    <span class="section-header-jp">新作</span>
  </h2>

<div class="l-full">
  <?php
        $args = array(
        'post_type' => 'products-custom',
        'showposts' => -1,
      );
      $posts = get_posts( $args );
      if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合 ?>
    <div class="l-tile-grid-3 top-new-arrival">
      <div class="content-item-box">
        <a href="#" class="content-item-box-link">
          <figure class="content-item-productpics"style="background-image: url('<?php the_field('product_mainpics');?>')"></figure>
          <h2 class="content-item-productname">
            <?php the_field('product_name'); ?>
            <span class="more">
              MORE
            </span>
          </h2>
        </a>
      </div>
    </div>
  <?php endforeach ; ?>
  <?php endif; ?>
</div>

</section>


    <div class="l-full">
      <div class="l-tile-grid-6 information-grid">
        <div class="l-grid-6 l-offset-left-3 l-offset-right-3 information-item">
          <p class="top-text-heading">STORE INFO
            <span class="top-text-heading-jp">取扱店舗</span>
          </p>
          <p class="top-text-label">Shop name</p>
          <p class="top-text-lead">Club Ammona</p>
          <p class="top-text-label">Address</p>
          <p class="top-text-lead">大阪府大阪市中央区東心斎橋2-3-22玉八ビル</p>
          <p class="top-text-label">Contact</p>
          <p class="top-text-lead">06-6211-3993</p>
        </div>
      </div>
      <div class="l-tile-grid-6 information-grid">
        <div class="l-grid-6 l-offset-left-3 l-offset-right-3 information-item">
          <p class="top-text-heading">NEWS LETTER</p>
          <p class="top-text-label">&amp;mona(アンドモナ)</p>
          <p class="top-text-lead">&amp;mona(アンドモナ)</p>
          <p class="top-text-notes">&amp;mona(アンドモナ)</p>
        </div>
      </div>
    </div>
  </div>

<section class="l-wrapper section-sns">
  <div class="l-conteiner">
    <div class="l-row">
      <div class="l-grid-2 l-offset-left-5 l-offset-right-5">
        <ul class="sns-nav-list">
          <li class="sns-nav-listin">
            <a href="" class="sns-nav-listin-link">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="sns-nav-listin">
            <a href="" class="sns-nav-listin-link">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="sns-nav-listin">
            <a href="" class="sns-nav-listin-link">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<footer class="l-footer">
  <h5 class="copyright">&copy;2017 &amp;mona</h5>
</footer>

</article>


<?php get_footer(); ?>
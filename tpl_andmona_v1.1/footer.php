<?php wp_footer(); ?>
<!-- ▼ write your contents ▼ -->

<section class="l-wrapper section-sns">
  <div class="l-conteiner">
    <div class="l-row">
      <div class="l-grid-4 l-offset-left-4 l-offset-right-4">
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
          <li class="sns-nav-listin">
            <a href="http://wear.jp/andmona/" target="_blank" class="sns-nav-listin-link">
              <div class="sns-wear-box">
                <p class="sns-wear-boxin">W<span class="sns-wear-E">E</span></p>
                <p class="sns-wear-boxin">A<span class="sns-wear-R">R</span></p>
              </div>
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
<script src="<?php bloginfo('template_url');?>/lib/js/app.js"></script>

<script>
  $(function(){
    $('.trigger-wrapper').click(function(){
      $('.trigger-line').toggleClass('trigger-line-active');
      $('.g-nav').toggleClass('g-nav-active');
      $('.content-wrapper').toggleClass('content-wrapper-deactive');
    });
  });
</script>
</body>
</html>
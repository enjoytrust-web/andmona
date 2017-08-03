<?php wp_footer(); ?>
<!-- ▼ write your contents ▼ -->
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
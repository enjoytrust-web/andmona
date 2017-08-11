<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->

<section class="products">

	<div class="l-full">
		<div class="products-bg">
			<div class="l-grid-8">
				<img class="products-imgs" src="<?php bloginfo('template_url');?>/lib/image/item_mirror_20170702.jpg" alt="">
			</div><!-- grid END -->
			<div class="l-offset-right-1 l-grid-3 flex-grow">
				<div class="products-text-box">
					<p class="products-text-boxin-name">Compact Mirror</p>
					<div class="products-text-boxin-border"></div>
					<p class="products-text-boxin-price">￥1,000</p>
					<p class="products-text-boxin-detail">シックでシンプルなアンモナロゴ入りコンパクトミラー
					</p>
					<div class="products-text-boxin-detail-box">
						<p class="products-text-boxin-detail-boxin-title">Color</p>
						<a href="#" title="black">
							<img class="products-text-boxin-detail-boxin-color" src="<?php bloginfo('template_url');?>/lib/image/color-black.jpg" alt="black">
						</a>
						<p class="products-text-boxin-detail-boxin-title">Size</p>
						<p class="products-text-boxin-detail-boxin-size">S</p>
					</div><!-- products-text-boxin-detail-box END-->
					<a href="contact.php" class="products-text-boxin-contact"><p class="products-text-boxin-contact-text">お問い合わせ</p></a>
				</div><!-- products-text-box END -->
			</div><!-- grid END -->
		</div><!-- products-bg END -->

<!-- detail START -->
		<div class="products-bg">
			<div class="l-offset-left-1 l-grid-3">

			<p class="products-title">DETAILS</p>
				<div class="products-detail-box">
					<dl class="products-text-box-dlist">
						<dt class="products-text-box-dlistin-title">材質</dt>
						<dd class="products-text-box-dlistin-detail">ABC樹脂 / 鏡（ガラス）</dd>

						<dt class="products-text-box-dlistin-title">注意</dt>
						<dd class="products-text-box-dlistin-detail">変質・変色の恐れがありますので、シンナー・アルコール等の有機系溶剤が付着しないようにご注意ください。</dd>
						<dd class="products-text-box-dlistin-detail">たわしや磨き粉などで拭きますと、ガラス面や本体に傷がつきますので使用しないで下さい。</dd>
						<dd class="products-text-box-dlistin-detail">本体や鏡は柔らかい布地で軽く拭いてください。力を入れすぎると、キズがつく場合があります。</dd>
						<dd class="products-text-box-dlistin-detail">落としたり硬いものにぶつかると鏡が割れて怪我をする恐れがあります。</dd>
						<dd class="products-text-box-dlistin-detail">直射日光の当たる場所や火気のそばでの使用・保管はしないで下さい。</dd>
						<dd class="products-text-box-dlistin-detail">本来の目的外でのご使用はお止め下さい。</dd>
						<dd class="products-text-box-dlistin-detail">乳幼児の手の届かないところに保管して下さい。</dd>
						<dd class="products-text-box-dlistin-detail">鏡や本体部分が破損した場合はご使用をお止め下さい。</dd>
					</dl>
				</div>
			</div>
			<div class="l-tile-grid-8">
				<img class="products-imgs-small-a" src="<?php bloginfo('template_url');?>/lib/image/item_mirror_20170702.jpg" alt="">
			</div>

		</div><!-- products-bg END -->
	</div><!-- l-full END -->
</section>

<section class="recommend">
	<div class="l-full">
		<div class="recommend-bg">
			<div class="l-offset-grid-1 grid-10 l-offset-grid-1">
				<h2 class="section-header">
	          	RECOMMENDED FOR YOU
	          		<span class="section-header-jp">あなたにおすすめ</span>
	        	</h2>

	        	<div class="l-grid-3">
	        		<div class="recommend-item-box">
		        		<a class="recommend-item-box-link" href="#">
		        			<figure class="recommend-item-productpics" style="background-image: url('<?php the_field('product_mainpics');?>')"></figure>
		        			<h2 class="recommend-item-productname">
		        				<?php the_field('product_name'); ?>
		        				<span class="recommend-item-more">
		        					MORE
		        				</span>
		        			</h2>
		        		</a>
	        		</div>
	        	</div>

	        	<div class="l-grid-3">
	        		<div class="recommend-item-box">
		        		<a class="recommend-item-box-link" href="#">
		        			<figure class="recommend-item-productpics" style="background-image: url('<?php the_field('product_mainpics');?>')"></figure>
		        			<h2 class="recommend-item-productname">
		        				<?php the_field('product_name'); ?>
		        				<span class="recommend-item-more">
		        					MORE
		        				</span>
		        			</h2>
		        		</a>
	        		</div>
	        	</div>

	        	<div class="l-grid-3">
	        		<div class="recommend-item-box">
		        		<a class="recommend-item-box-link" href="#">
		        			<figure class="recommend-item-productpics" style="background-image: url('<?php the_field('product_mainpics');?>')"></figure>
		        			<h2 class="recommend-item-productname">
		        				<?php the_field('product_name'); ?>
		        				<span class="recommend-item-more">
		        					MORE
		        				</span>
		        			</h2>
		        		</a>
	        		</div>
	        	</div>

	        	<div class="l-grid-3">
	        		<div class="recommend-item-box">
		        		<a class="recommend-item-box-link" href="#">
		        			<figure class="recommend-item-productpics" style="background-image: url('<?php the_field('product_mainpics');?>')"></figure>
		        			<h2 class="recommend-item-productname">
		        				<?php the_field('product_name'); ?>
		        				<span class="recommend-item-more">
		        					MORE
		        				</span>
		        			</h2>
		        		</a>
	        		</div>
	        	</div>

			</div><!-- grid END -->
		</div><!-- recommend-bg END -->
	</div><!-- l-full END -->

</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->

<section class="contact-wrapper" >

	<div class="l-conttainer">
		<div class="l-row">
			<div class="l-grid-12">
				<p class="contact-title">
					CONTACT
				</p>
			</div>
		</div>
	</div>
<!-- お問い合わせカテゴリー -->
	<form class="contact-form-post-wrapper" action="mail.php" method="post">

		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="name">
					お問い合わせカテゴリー<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-selector">
				<select name="お問い合わせカテゴリー">
					<option value="未選択">選択してください</option>
					<option value="商品について">商品について</option>
					<option value="お取り扱い店舗について">お取り扱い店舗について</option>
					<option value="ご意見・ご要望">ご意見・ご要望</option>
					<option value="その他">その他</option>
				</select>
			</dd>
		</dl>
<!-- お問い合わせ内容 -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="name">
					お問い合わせ内容<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<textarea name="お問い合わせ内容" class="contact-form-letter" cols="30" rows="10"></textarea>
			</dd>
		</dl>
<!-- 名前 -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="name">
					名前<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<input type="text" name="名前">
			</dd>
		</dl>
<!-- フリガナ -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="name">
					フリガナ<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<input type="text" name="フリガナ">
			</dd>
		</dl>
<!-- E-mail -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="email1">
					メールアドレス<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<input type="email1" name="メールアドレス">
			</dd>
		</dl>
<!-- 確認用　E-mail -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="email-matching">
					メールアドレス<span class="form-must-mark">※</span>
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<input type="email-matching" name="メールアドレス">
			</dd>
		</dl>
<!-- 電話番号 -->
		<dl class="contact-form-list">
			<dt class="contact-form-title">
				<label for="name">
					電話番号
				</label>
			</dt>

			<dd class="contact-form-content-letter">
				<input type="text" name="電話番号">
			</dd>
		</dl>

	</form>

</section>

<?php get_footer(); ?>
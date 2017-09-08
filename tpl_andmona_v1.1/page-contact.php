<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->

<section class="contact-wrapper" >

	<div class="l-container">
		<div class="l-row">
			<div class="l-grid-5">
				<p class="contact-title">
					CONTACT
				</p>
			</div>
		</div>
	</div>

<div class="form-wrapper">
	<div class="l-container">
		<div class="l-row">

			<!-- お問い合わせカテゴリー -->
				<form class="contact-form-post-wrapper" action="mail.php" method="post">

		<div class="l-grid-6">
			<div class="l-row">
				<div class="form-gridin-box">

					<p class="form-label-inlead">
						ご登録いただくお客様の個人情報は、お客様からのお問い合わせに回答するために利用させていただきます。
						個人情報の取り扱いについては
						<a class="form-label-inlead-link" href="<?php echo home_url();?>/privacy_policy">こちら</a>。
					</p>

					<dl class="contact-form-list">
						<dt class="contact-form-title">
							<label for="name">
								お問い合わせカテゴリー<span class="form-must-mark"></span>
							</label>
						</dt>

						<dd class="contact-form-content-selector-wrapper">
							<select name="お問い合わせカテゴリー" class="contact-form-content-selector">
								<option class="contact-form-selector-option" value="未選択">選択してください</option>
								<option class="contact-form-selector-option" value="商品について">商品について</option>
								<option class="contact-form-selector-option" value="お取り扱い店舗について">お取り扱い店舗について</option>
								<option class="contact-form-selector-option" value="ご意見・ご要望">ご意見・ご要望</option>
								<option class="contact-form-selector-option" value="その他">その他</option>
							</select>
						</dd>
					</dl>
			<!-- お問い合わせ内容 -->
					<dl class="contact-form-list">
						<dt class="contact-form-title">
							<label for="name">
								お問い合わせ内容<span class="form-must-mark"></span>
							</label>
						</dt>

						<dd class="contact-form-content-letter">
							<textarea name="お問い合わせ内容" class="contact-form-letter" cols="30" rows="10"></textarea>
						</dd>
					</dl>
				</div>
			</div><!-- l-row END -->
		</div><!-- grid END -->

		<div class="l-grid-6">
			<div class="l-row">
				<div class="form-gridin-box">
			<!-- 名前 -->
					<dl class="contact-form-list">
						<dt class="contact-form-title">
							<label for="name">
								名前<span class="form-must-mark"></span>
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
								フリガナ<span class="form-must-mark"></span>
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
								メールアドレス<span class="form-must-mark"></span>
							</label>
						</dt>

						<dd class="contact-form-content-letter">
							<input type="email" name="メールアドレス">
						</dd>
					</dl>
			<!-- 確認用　E-mail -->
					<dl class="contact-form-list">
						<dt class="contact-form-title">
							<label for="email-forConfirm">
								メールアドレス確認用<span class="form-must-mark"></span>
							</label>
						</dt>

						<dd class="contact-form-content-letter">
							<input type="email" name="メールアドレス">
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
			<!-- 個人情報取り扱い　同意 -->
					<p class="form-checbox">
							<input type="checkbox" name="個人情報の取り扱い" value="同意する" id="agree">
							<label for="agree">プライバシーポリシーに同意する<span class="form-must-mark"></span></label>
					</p>

				</div>
			</div>
		</div><!-- grid END -->


		<div class="l-grid-3">
			<div class="form-btn-box">
				<button type="submit" value="送信" class="form-btn">SEND</button>
			</div>
		</div>

		<div class="l-grid-2">
			<div class="form-btn-box">
				<button type="reset" value="リセット" class="form-btn form-btn-reset">RESET</button>
			</div>
		</div>

			</form>

		</div>
	</div>
</div>

</section>

<?php get_footer(); ?>
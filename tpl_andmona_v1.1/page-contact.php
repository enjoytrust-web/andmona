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
			<div class="l-grid-5 grid-center">

			<!-- お問い合わせカテゴリー -->
				<form class="contact-form-post-wrapper" action="mail.php" method="post">

					<dl class="contact-form-list">
						<dt class="contact-form-title">
							<label for="name">
								お問い合わせカテゴリー<span class="form-must-mark"></span>
							</label>
						</dt>

						<dd class="contact-form-content-selector-wrapper">
							<select name="お問い合わせカテゴリー" class="contact-form-content-selector">
								<option class="contact-form-selector-option noSelect" value="未選択">選択してください</option>
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
								<p class="form-label-inlead">ご登録いただくお客様の個人情報は、お客様からのお問い合わせに回答するために利用させていただきます。<br>
								個人情報の取り扱いについては
								<a class="form-label-inlead-link" href="">こちら</a>。
								</p>
					<dl class="contact-form-checkbox-list">
						<dt class="contact-form-checkbox">
								<input type="checkbox" name="個人情報の取り扱い" value="同意する" id="agree">
						</dt>

						<dd class="contact-form-checbox-lead">
								<label for="agree">上記に同意する<span class="form-must-mark"></span></label>
						</dd>
					</dl>

					<div class="form-btn-box">
						<button type="submit" value="送信" class="form-btn">送信</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

</section>

<?php get_footer(); ?>
<?php get_header(); ?>
<div class="main-visual contact">
  <div class="inner">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact-logo.png" alt="お問い合わせ"></h2>
  </div>
</div>

<div class="form-area contact">
  <div class="inner">
<form action="#" method="post">
  <div class="item">
  <label class="label must" for="name">お名前</label>
  <input class="inputs" id="name" type="text" name="name">
  </div>
  <div class="item">
  <label class="label must" for="mail">メールアドレス</label>
  <input class="inputs email" id="mail" type="email" name="mail">
  </div>
  <div class="item">
  <label class="label" for="tel">電話番号</label>
  <input class="inputs" id="tel" type="number" name="tel">
  </div>
  <div class="item">
  <label class="label" for="subject">件名</label>
  <input class="inputs subject" id="subject" type="text" name="subject">
  </div>
  <div class="item">
  <label class="label label-comment" for="comment">メッセージ本文</label>
  <textarea class="inputs" name="comment" id="comment" cols="80" rows="10"></textarea>
  </div>

  <input type="submit" value="送信する">

</form>
</div>
</div>

<?php get_footer(); ?>
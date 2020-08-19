<?php get_header(); ?>
<div class="main-visual contact">
  <div class="inner">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact-logo.png" alt="お問い合わせ"></h2>
  </div>
</div>

<div class="form-area contact">
  <div class="inner">
<!-- <form action="<?php echo get_the_permalink(); ?>" method="post"> -->
<?php echo do_shortcode('[contact-form-7 id="86" title="お問い合わせ"]'); ?>
<!-- </form> -->
</div>
</div>

<?php get_footer(); ?>
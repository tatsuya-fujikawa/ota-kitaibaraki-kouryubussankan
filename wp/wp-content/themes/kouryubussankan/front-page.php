<?php get_header(); ?>
<div class="swiper-parent">
  <div class="swiper-container">
    <!-- ラッパーの（スライドを囲む） div 要素 -->
    <div class="swiper-wrapper">
      <!-- 各スライド div 要素 -->
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide01.jpg" alt="おおた・北茨城交流物産館バスターミナル駅"></a></div>
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>/kouryubussankan/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide02.jpg" alt="太田市に海がやってきた！"></a></div>
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>/suisan"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide03.jpg" alt="みなとの魚"></a></div>
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>/seika"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide04.jpg" alt="フレッシュベジフルおおた"></a></div>
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>/syokuniku"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide05.jpg" alt="肉の駅おおた店"></a></div>
      <div class="swiper-slide"><a href="<?php echo home_url(); ?>/syokuji"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide06.jpg" alt="海鮮加一"></a></div>
    </div>
    <!-- ページネーション -->
    <div class="swiper-pagination"></div>
  </div>
  <div class="backgroundimg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana01.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana02.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana03.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana04.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ushi.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tomato.png" alt="" class="ttl_icon">
  </div>
</div>
</div>


<div class="btn-area">
  <div class="wrapper">
    <div class="btn-flex">
      <ul class="btn-flex--area">
        <li class="btn-flex--item"><a href="<?php echo home_url(); ?>/kouryubussankan/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link-btn1.png" alt="交流物産館ってなに？"></a></li>
        <li class="btn-flex--item"><a href="<?php echo home_url(); ?>/suisan/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link-btn2.png" alt="水産"></a></li>
        <li class="btn-flex--item"><a href="<?php echo home_url(); ?>/seika/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link-btn3.png" alt="青果"></a></li>
        <li class="btn-flex--item"><a href="<?php echo home_url(); ?>/syokuniku/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link-btn4.png" alt="食肉"></a></li>
        <li class="btn-flex--item"><a href="<?php echo home_url(); ?>/syokuji/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link-btn5.png" alt="お食事"></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="news-area">
  <div class="wrapper">
    <div class="news-flex">
      <div class="news-flex--item">
        <div class="news-sidebar">
          <div class="news-sidebar--title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar-title.png" alt="">
          </div>
          <div class="news-sidebar--box">
            <div class="news-sidebar--text">
              <p>
                太田市の友好都市茨城県北茨城市やいわき市、日立市、豊洲の各市場から新鮮な魚介類を、毎日自社の冷凍車で集荷して太田市の皆様にいち早く提供します。<br>他にも太田市産の青果物、群馬県産の食肉、鮮度抜群の食事を用意した交流施設です。
              </p>
            </div>
            <div class="news-sidebar--red">
              <p>営業時間</p>
            </div>
            <ul class="news-sidebar--list">
              <li><span>みなとの魚</span><br>午前10時～午後8時</li>
              <li><span>田田おおた</span><br>午前10時～午後8時</li>
              <li><span>肉の駅おおた店</span><br>午前10時～午後8時</li>
              <li><span>まぐろ丼&ensp;加一</span><br>午前11時～午前0時</li>
            </ul>
          </div>
          <div class="news-sidebar--line">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.png" alt="ラインボタン">
            <p>新鮮な情報を毎日お届け！</p>
          </div>
        </div>
      </div>
      <div class="news-flex--item">
        <div class="news-container">
          <div class="news-container--title first-title">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-title.png" alt="お知らせ・イベント情報"></h2>
          </div>
          <div class="news-container--table">
            <dl>
              <?php
              $args = array(
                'post_type' => 'newtopics',
                'posts_per_page' => 5,
              );
              $the_query_newtopics = new WP_Query($args); ?>
              <?php if ($the_query_newtopics->have_posts()) : ?>
                <?php while ($the_query_newtopics->have_posts()) : $the_query_newtopics->the_post(); ?>
                  <a href="<?php echo home_url(); ?>/newtopics/">
                    <dt><?php the_time('Y.m.d'); ?></dt>
                    <dd><?php the_title(); ?></dd>
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
            </dl>
          </div>
        </div>
        <div class="news-container">
          <div class="news-container--title">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-title2.png" alt="毎日採れたて情報"></h2>
          </div>
          <div class="news-container--table secound-table">
            <dl>
              <?php
              $args = array(
                'post_type' => 'toretate',
                'posts_per_page' => 5,
              );
              $the_query_toretate = new WP_Query($args); ?>
              <?php if ($the_query_toretate->have_posts()) : ?>
                <?php while ($the_query_toretate->have_posts()) : $the_query_toretate->the_post(); ?>
                  <a href="<?php echo home_url(); ?>/toretate/">
                    <dt><?php the_time('Y.m.d'); ?></dt>
                    <dd><?php the_title(); ?></dd>
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!--news-flex -->
  </div><!-- wrapper -->
</div><!-- news-area -->

<div class="topics-area">
  <div class="wrapper">
    <h2 class="topics-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topcs-title.png" alt="ピックアップトピックス">
    </h2>
    
    <div class="topics-flex">
    <div class="backgroundimg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana01.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana04.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sakana03.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tomato.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ushi.png" alt="" class="ttl_icon">
  </div>
      <?php
      $args = array(
        'post_type'  => 'suisan',
        'posts_per_page' => 1,
        'order'          => 'DESC',
      );
      $the_query_suisan = new WP_Query($args);
      if ($the_query_suisan->have_posts()) :
        while ($the_query_suisan->have_posts()) : $the_query_suisan->the_post();
      ?>
          <div class="topics-container bg-col-blue topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topics-title01.png" alt="みなとの魚"></h2>
            </div>
            <div class="topics-container--title">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="topics-container--img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_s.png" alt="">
              <?php endif; ?>
            </div>
            <div class="topics-container--text">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="topics-container--btn btn-blue">
              <a href="<?php echo home_url(); ?>/suisan/#topics">more</a>
            </div>
          </div>
      <?php endwhile;
      endif;
      ?>
      <?php wp_reset_postdata(); ?>

      <?php
      $args = array(
        'post_type'  => 'seika',
        'posts_per_page' => 1,
        'order'          => 'DESC',
      );
      $the_query_seika = new WP_Query($args);
      if ($the_query_seika->have_posts()) :
        while ($the_query_seika->have_posts()) : $the_query_seika->the_post();
      ?>
          <div class="topics-container bg-col-green topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topics-title02.png" alt="フレッシュベジフルおおた"></h2>
            </div>
            <div class="topics-container--title">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="topics-container--img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_s.png" alt="">
              <?php endif; ?>
            </div>
            <div class="topics-container--text">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="topics-container--btn btn-orange">
              <a href="<?php echo home_url(); ?>/seika/#topics">more</a>
            </div>
          </div>
      <?php endwhile;
      endif;
      ?>
      <?php wp_reset_postdata(); ?>

      <?php
      $args = array(
        'post_type'  => 'syokuniku',
        'posts_per_page' => 1,
        'order'          => 'DESC',
      );
      $the_query_syokuniku = new WP_Query($args);
      if ($the_query_syokuniku->have_posts()) :
        while ($the_query_syokuniku->have_posts()) : $the_query_syokuniku->the_post();
      ?>
          <div class="topics-container bg-col-yellow topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topics-title03.png" alt="肉の駅おおた店"></h2>
            </div>
            <div class="topics-container--title">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="topics-container--img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_s.png" alt="">
              <?php endif; ?>
            </div>
            <div class="topics-container--text">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="topics-container--btn btn-orange">
              <a href="<?php echo home_url(); ?>/syokuniku/#topics">more</a>
            </div>
          </div>
      <?php endwhile;
      endif;
      ?>
      <?php wp_reset_postdata(); ?>

      <?php
      $args = array(
        'post_type'  => 'syokuji',
        'posts_per_page' => 1,
        'order'          => 'DESC',
      );
      $the_query_syokuji = new WP_Query($args);
      if ($the_query_syokuji->have_posts()) :
        while ($the_query_syokuji->have_posts()) : $the_query_syokuji->the_post();
      ?>
          <div class="topics-container bg-col-pink topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/topics-title04.png" alt="海鮮 加一"></h2>
            </div>
            <div class="topics-container--title">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="topics-container--img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_s.png" alt="">
              <?php endif; ?>
            </div>
            <div class="topics-container--text">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="topics-container--btn btn-violet">
              <a href="<?php echo home_url(); ?>/syokuji/#topics">more</a>
            </div>
          </div>
      <?php endwhile;
      endif;
      ?>
      <?php wp_reset_postdata(); ?>
    </div><!-- topics-flex -->
  </div>
  </div>

  <?php get_footer(); ?>
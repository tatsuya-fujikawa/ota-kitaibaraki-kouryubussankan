<?php get_header(); ?>

<?php 
if(have_posts()) :
  while(have_posts()): the_post();
 ?>
 <h1><?php the_title(); ?></h1>
 <section>
   <?php the_content(); ?>
 </section>
<?php endwhile;
endif;
 ?>
 

      
      <div class="news-area">
        <div class="wrapper">
          <div class="news-flex">
            <div class="news-flex--item">
              <div class="news-sidebar">
                <div class="news-sidebar--title">
                  <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/sidebar-title.png" alt="">
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
                    <li><span>フレッシュベジフルおおた</span><br>午前10時～午後8時</li>
                    <li><span>肉の駅おおた店</span><br>午前10時～午後8時</li>
                    <li><span>まぐろ丼&ensp;加一</span><br>午前10時～午前0時</li>
                  </ul>
                </div>
                <div class="news-sidebar--line">
                  <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/line.png" alt="ラインボタン">
                  <p>新鮮な情報を毎日お届け！</p>
                </div>
              </div>
            </div>
            <div class="news-flex--item">
              <div class="news-container">
                <div class="news-container--title first-title">
                  <h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/news-title.png" alt="お知らせ・イベント情報"></h2>
                </div>
                <div class="news-container--table">
                  <dl>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                  </dl>
                </div>
              </div>
              <div class="news-container">
                <div class="news-container--title">
                  <h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/news-title2.png" alt="毎日採れたて情報"></h2>
                </div>
                <div class="news-container--table secound-table">
                  <dl>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                    <dt>2020.1.1</dt>
                    <dd>お知らせが入りますお知らせが入りますお知らせが入ります</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div><!--news-flex -->
        </div><!-- wrapper -->
      </div><!-- news-area -->

      <div class="topics-area">
        <div class="wrapper">
          <h2 class="topics-title">
            <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topcs-title.png" alt="ピックアップトピックス">
          </h2>

          <div class="topics-flex">
          <div class="topics-container bg-col-blue topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-title01.png" alt="みなとの魚"></h2>
            </div>
            <div class="topics-container--title">
              <time>2020.09.01</time>
              <h3>【OPEN記念】マグロの解体ショーを開催します！</h3>
            </div>
            <div class="topics-container--img">
              <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-picture01.jpg" alt="">
            </div>
            <div class="topics-container--text">
              <p>交流物産館OPENを記念して、マグロの解体ショーを開催します！ 希少部位を狙うならチャンスです！ 美味しいマグロで華やかなOPENを祝いましょう！</p>
            </div>
            <div class="topics-container--btn btn-blue">
              <a href="">more</a>
            </div>
          </div>

          <div class="topics-container bg-col-green topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-title02.png" alt="フレッシュベジフルおおた"></h2>
            </div>
            <div class="topics-container--title">
              <time>2020.09.01</time>
              <h3>今が旬！キラキラ輝く夏野菜多数入荷しました。</h3>
            </div>
            <div class="topics-container--img">
              <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-picture02.jpg" alt="">
            </div>
            <div class="topics-container--text">
              <p>梅雨の雨をたっぷり吸って、太陽をしっかり浴びた夏野菜はこの時期だけの贅沢ですよね。今夜の食卓に夏の恵みを取り入れてはいかがでしょうか。</p>
            </div>
            <div class="topics-container--btn btn-orange">
            <a href="">more</a>
            </div>
          </div>

          <div class="topics-container bg-col-yellow topics-flex--item">
            <div class="topics-container--main">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-title03.png" alt="肉の駅おおた店"></h2></div>
            <div class="topics-container--title">
              <time>2020.09.01</time>
              <h3>当店自慢の上州和牛、ご用意しました！</h3>
            </div>
            <div class="topics-container--img">
              <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-picture03.jpg" alt="">
            </div>
            <div class="topics-container--text">
              <p>広大な牧場で育った上州和牛。 甘み・香り・旨み・柔らかさすべてそろった肉の駅お墨付きの和牛です。</p>
            </div>
            <div class="topics-container--btn btn-orange">
              <a href="">more</a>
            </div>
          </div>

          <div class="topics-container bg-col-pink topics-flex--item">
            <div class="topics-container--main"><h2><img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-title04.png" alt="海鮮 加一"></h2></div>
            <div class="topics-container--title">
              <time>2020.09.01</time>
              <h3>【数量限定】希少部位が入った刺身盛りをご提供！</h3>
            </div>
            <div class="topics-container--img">
              <img src="<?php echo get_template_directory_uri(); ?>/./assets/img/topics-picture04.jpg" alt="">
            </div>
            <div class="topics-container--text">
              <p>OPEN日限定で、解体ショーでさばいてすぐのマグロを刺身盛り合わせにてご提供。みなとの魚×まぐろ丼 加一のコラボレーション、ぜひご賞味ください！</p>
            </div>
            <div class="topics-container--btn btn-violet">
              <a href="">more</a>
            </div>
          </div>
        </div><!-- topics-flex -->
        </div><!-- wrapper -->
<?php get_footer(); ?>
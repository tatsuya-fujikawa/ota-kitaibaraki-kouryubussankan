<?php get_header(); ?>
<div class="main-visual suisan">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan-logo.png" alt="フレッシュベジフルおおた"></h2>
        <div class="sub-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan-top.png" alt="">
        </div>
</div>

<section class="lead suisan">
    <div class="inner">
        <p class="main-visual__description font-size--LL fw--bold"><span class="col-yellow">とれたて新鮮</span>なおいしさが勢ぞろい！<br>お客様の<span class="col-yellow">“おいしい！”</span>が聞きたくて、港から<span class="col-yellow">毎日選りすぐりの魚介を直送！</span>
        </p>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_lead_img.jpg" alt="" class="leadImage">
            <figcaption>
                <p class="text font-size--L col-blue">北茨城市やいわき市、日立市、豊洲の各市場から目利きのプロ太鼓判の魚介をご用意！</p>
                <p class="text font-size--M">毎日各地から取り寄せられる魚介はその日に水揚げされたものから、本当においしいものを厳選。やりいか、あんこう、さば、しらすから海老、かに、貝類まで、その他にも豊富な品ぞろえで皆様をお待ちしております。鮮魚はお客様から注文が入ってから職人がさばいて販売することも可能です。店頭スタッフにどんどんお申し付けください。</p>
            </figcaption>
        </figure>
    </div>
</section>
<section class="recommend suisan"> 
    <div class="title">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_title_01_icon01.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_title_01_icon02.png" alt="" class="ttl_icon">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_title_01_text.png" alt="おすすめ商品" class="ttl_text"></h3>

</div>
    <div class="inner">
        <ul class="list">
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_img_01.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">やりいか</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_img_02.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">あんこう</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_img_03.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">さば</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_img_04.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">しらす</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
        </ul>
    </div>
</section>
<section id="topics" class="topics suisan">
    <h3><div class="title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/suisan/suisan_title_02_text.png" alt="トピックス"></div></h3>
    <div class="inner">
        <div class="detail">
            <ul class="list">
            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="list__item">
                            <dl>
                                <dt class="text font-size--LL">
                                    <h3><?php the_title(); ?></h3>
                                </dt>
                                <time datetime="<?php the_time('Y-m-d'); ?>" class="text font-size--S"><?php the_time('Y.m.d'); ?></time>
                                <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_l.png" alt="">
                                <?php endif; ?>
                                <dd class="text font-size--M"><?php the_content(); ?></dd>
                            </dl>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="category">
            <ul class="list flex">
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/seika/">青果</a></li>
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/syokuniku/">食肉</a></li>
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/syokuji">お食事</a></li> 
            </ul>
        </div>
    </div>
<?php get_footer(); ?>
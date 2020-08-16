<?php get_header(); ?>
<div class="main-visual seika">
    <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika-logo.png" alt="フレッシュベジフルおおた"></h2>
    <div class="sub-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika-top.png" alt="">
    </div>
</div>

<section class="lead seika">
    <div class="inner">
        <p class="main-visual__description font-size--LL fw--bold"><span class="col-green">地元産</span>の<span class="col-green">信頼</span>できる<span class="col-green">旬野菜</span>が大集合！<br>群馬県育ちの<span class="col-green">安心・安全</span>な<span class="col-green">おいしい野菜</span>をご用意しています！。</p>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_lead_img.jpg" alt="" class="leadImage">
            <figcaption>
                <p class="text font-size--L col-blue">たっぷりの太陽と豊かな畑でいきいき育った新鮮野菜。栄養豊富な旬の野菜をぜひお召し上がりください！</p>
                <p class="text font-size--M">群馬県各地からとれる野菜は種類もさまざま。そのまま食べても、もちろん調理してもおいしくお召し上がりいただけます。季節ごとに品ぞろえがかわるのも野菜の魅力の一つ。次はどんな野菜を食べてみようか…ワクワクしながらご来店ください。</p>
            </figcaption>
        </figure>
    </div>
</section>
<section class="recommend seika">
    <div class="title">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_title_01_text.png" alt="おすすめ商品" class="ttl_text"></h3>

    </div>
    <div class="inner">
        <ul class="list">
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_img_01.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">小松菜</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_img_02.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">なす</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_img_03.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">枝豆</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_img_04.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">いちご（やよいひめ）</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
        </ul>
    </div>
</section>
<section class="topics seika">
    <h3>
        <div class="title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seika/seika_title_02_text.png" alt="トピックス"></div>
    </h3>
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
                                <?php the_post_thumbnail(); ?>
                                <dd class="text font-size--M"><?php the_content(); ?></dd>
                            </dl>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="category">
            <ul class="list flex">
                <li class="list__item font-size--LL"><a href="../suisan/">水産</a></li>
                <li class="list__item font-size--LL"><a href="../syokuniku/">食肉</a></li>
                <li class="list__item font-size--LL"><a href="../syokuji/">お食事</a></li>
            </ul>
        </div>
    </div>
    <?php get_footer(); ?>
<?php get_header(); ?>
<div class="main-visual syokuniku">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku/syokuniku-logo.png" alt="肉の駅おおた店"></h2>
        <div class="sub-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku/syokuniku-top.png" alt="">
        </div>
</div>

<section class="lead syokuniku">
    <div class="inner">
        <p class="main-visual__description font-size--LL fw--bold col-white"><span class="col-red">「上州和牛」「上州牛®」</span>上州群馬の名を冠した<span class="col-red">日本の誇る牛肉</span>。<br><span class="col-red">甘み・香り・旨み・柔らかさ</span>すべて兼ね備えたお肉、ご賞味ください。</p>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_lead_img.jpg" alt="" class="leadImage">
            <figcaption>
                <p class="text font-size--L col-brown">肉の駅は、市場より直送の新鮮で「安心、安全」なお肉をみなさまに販売しております。</p>
                <p class="text font-size--M">昔懐かしい"お肉屋さん"をイメージコンセプトに運営をしており、各店舗にはお肉の専門家がおりますので、お気軽にご相談ください。<br>上州和牛、上州麦豚のほかに鶏肉や、ハム・ベーコン・ウインナーなどの加工品や、コロッケ・メンチカツ等の総菜も幅広く取り揃えています。</p>
            </figcaption>
        </figure>
    </div>
</section>
<section class="recommend syokuniku"> 
    <div class="title"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_01_icon01.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_01_icon02.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_01_icon03.png" alt="" class="ttl_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_01_icon04.png" alt="" class="ttl_icon">
    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_01_text.png" alt="おすすめ商品" class="ttl_text">
    </h3>
    
</div>
    <div class="inner">
        <ul class="list">
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_img_01.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">上州和牛</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_img_02.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">上州麦豚</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_img_03.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">ベーコン</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
            <li class="list__item">
                <dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_img_04.jpg" alt="" class="list__img">
                    <div>
                        <dt class="text font-size--S">コロッケ</dt>
                        <dd class="text font-size--S">説明が入ります説明が入ります説明が入ります説明が入ります</dd>
                    </div>
                </dl>
            </li>
        </ul>
    </div>
</section>
<section id="topics" class="topics syokuniku">
    <h3><div class="title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/syokuniku_title_02_text.png" alt="トピックス"></div></h3>
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
                <li class="list__item font-size--LL"><a href="../seika/">青果</a></li>
                <li class="list__item font-size--LL"><a href="../syokuji/">お食事</a></li> 
            </ul>
        </div>
    </div>
<?php get_footer(); ?>
<?php get_header(); ?>

<div class="main-visual newtopics">
    <div class="container container--main-visual">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/newtopics/news-title.png" alt="お知らせ・イベント情報" class="main-visual__img"></h2>
    </div>
</div>


<div class="topics newtopics">
    <div class="inner">
        <div class="detail">
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>

            <ul class="list">
                <li class="list__item">
                    <dl>
                        <dt class="text font-size--LL"><h3><?php echo the_title(); ?></h3></dt>
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="text font-size--S"><?php the_time('Y.m.d'); ?></time>
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_l.png" alt="">
                        <?php endif; ?>
                        <dd class="text font-size--M"><?php the_content(); ?></dd>
                    </dl>
                </li>
            </ul>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="category">
            <ul class="list flex">
                <li class="list__item font-size--LL flex-item"><a href="<?php echo home_url(); ?>/suisan/">水産</a></li>
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/seika/">青果</a></li>
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/syokuniku/">食肉</a></li> 
                <li class="list__item font-size--LL"><a href="<?php echo home_url(); ?>/syokuji/">お食事</a></li> 
            </ul>
        </div>
    </div>
<?php get_footer(); ?>
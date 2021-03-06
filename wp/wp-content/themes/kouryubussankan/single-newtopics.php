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
                        <time class="text font-size--S">2020.07.02</time>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newtopics/newtopics-02.jpg" alt="" class="list__img">
                        <dd class="text font-size--M">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</dd>
                    </dl>
                </li>
                <li class="list__item">
                    <dl>
                        <dt class="text font-size--LL"><h3><?php echo the_title(); ?></h3></dt>
                        <time class="text font-size--S">2020.07.02</time>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newtopics/newtopics-01.jpg" alt="" class="list__img">
                        <dd class="text font-size--M">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</dd>
                    </dl>
                </li>
            </ul>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="category">
            <ul class="list flex">
                <li class="list__item font-size--LL flex-item"><a href="">水産</a></li>
                <li class="list__item font-size--LL"><a href="">青果</a></li>
                <li class="list__item font-size--LL"><a href="">食肉</a></li> 
                <li class="list__item font-size--LL"><a href="">お食事</a></li> 
            </ul>
        </div>
    </div>
<?php get_footer(); ?>
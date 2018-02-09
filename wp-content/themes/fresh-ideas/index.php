<?php get_header(); ?>

    <header class="group_bannner_left">
        <hgroup>
            <h1>Свежие новости</h1>
            <h2>Мы всегда в авангарде. Наша команда работает на результат. Наши новости опережают время.</h2>
        </hgroup>
        <div class="button black"><a href="http://staff.kl.com.ua/?p=37&preview=true">Узнайте больше о нашей деятельности</a></div>
    </header>

     <div class="holder_content">
        <section class="group1">
            <?php if(isset($_GET['s'])): ?>
                <h3>Результаты поиска для <i>"<?php echo get_search_query(); ?>"</i>:</h3>
            <?php else: ?>
                <h3>Новости</h3>
                <p>Мы подбираем для Вас только полезную и позитивную информацию. Так как мы всегда находимся в водовороте событий, то готовы предоставить Вам только самую свежую информация.</p>
            <?php endif; ?>

            <?php if(have_posts()):
                    while(have_posts()):
                    the_post(); ?>

                <article class="holder_gallery">
                    <a class="photo_hover2" href="<?php the_permalink(); ?>">
                        <?php $image = get_field('article_poster'); ?>
                        <?php if($image['url'] == '') : ?>
                            <img src="<?php get_theme_path() ?>images/dub-kanon-renessans.jpg" width="150" height="99" alt="<?php the_title(); ?>" />
                        <?php else: ?>
                            <img src="<?php echo $image['url']; ?>" width="150" height="99" alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                    </a>

                    <h2><?php the_title(); ?></h2>
                    <div class="cont">
                        <?php the_content(); ?>
                    </div>
                    
                    <span class="readmore">
                        <a href="<?php the_permalink(); ?>">Подробнее..</a>
                    </span>
                </article>

            <?php endwhile;
            else : ?>
                <?php _e('Записей не найдено...'); ?>
            <?php endif; ?>

        </section>

        <?php get_sidebar(); ?>

        <section class="group3">
            <h3>О нас</h3>
            <?php $about_post_id = get_page_by_title('Свежие идеи', '', 'post' ); 
            $pst = get_post($about_post_id); ?>

            <a class="photo_hover2" href="#"><img src="<?php get_theme_path() ?>images/picture1.jpg" width="200" height="97" alt=""></a>
            <p><?=$pst->post_content; ?><span class="readmore"> <a href="http://staff.kl.com.ua/?p=37&preview=true">Read more..</a></span> </p>
        </section>
    </div><!--end holder-->

<?php get_footer(); ?>
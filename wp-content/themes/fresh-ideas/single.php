<?php get_header(); ?>
    
    <header class="group_bannner_left">
        <hgroup>
            <h1>We serve fresh ideas</h1>
            <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. </h2>
        </hgroup>
        <div class="button black"><a href="#">Read more about our fresh ideas</a></div>
    </header>

    <div class="holder_content single_post">
        <section class="group1">
            <?php the_post(); ?>
            <h2><?php the_title(); ?></h2>

            <div class="postedby"><i>Добавлено</i> <?php the_author_posts_link(); ?> <?=get_the_date(); ?> в <?php the_time(); ?></div>

            <?php $image = get_field('article_poster'); ?>
            <?php if($image['url'] != '') : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>

            <div class="cont">
                <?php the_content(); ?>
            </div>
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
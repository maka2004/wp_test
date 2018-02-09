<aside class="group2">

    <?php get_search_form(); ?>
    
    <h3>Новые события</h3>

    <?php $args = array(
        'numberposts' => 3,
        'orderby'     => 'date',
	    'order'       => 'DESC',
        //'suppress_filters' => false
    ); ?>
    
    <?php $lastposts = get_posts( $args );
        foreach($lastposts as $post):
            setup_postdata($post); ?>
            <?php $content = strip_tags($post->post_content);
                $content = mb_substr($content, 0, 60) . '...';
            ?>

            <article class="holder_news">
                <h4><span class="title"><?php the_title(); ?></span> <span><?=get_the_date('d.m.Y'); ?></span></h4>
                <p><span><?=$content; ?></span>
                <span class="readmore"> <a href="<?php the_permalink(); ?>">Read more</a></span></p>
            </article>

    <?php
        endforeach;
        wp_reset_postdata(); // сброс
    ?>

<a class="photo_hover2" href="#"><img src="<?php get_theme_path() ?>images/picture3.jpg" width="257" height="295" alt=""></a>
</aside>
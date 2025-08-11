<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package love-not-game
 */

get_header();
?>

    <div class="simplePost">
        <main>
            <div class="container">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part('content-parts/content', 'single'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php
            $related_posts = new WP_Query([
                'post_type'      => get_post_type(),
                'posts_per_page' => 3,
                'post__not_in'   => [ get_the_ID() ],
                'orderby'        => 'date',
                'order'          => 'DESC'
            ]);

            if ( $related_posts->have_posts() ) :
                ?>
                <div class="related-posts">
                    <div class="container">
                        <h2>Читайте также</h2>
                        <div class="posts__loop">
                            <div class="grid-archive">
                                <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                                    <div class="post-card">
                                        <a href="<?php the_permalink(); ?>" target="_self" class="post-card--link">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <figure class="post-card--img">
                                                    <img
                                                            src="<?php the_post_thumbnail_url('full'); ?>"
                                                            alt="<?php the_title_attribute(); ?>"
                                                    />
                                                </figure>
                                            <?php endif; ?>
                                            <div class="post-card--content">
                                                <h3 class="post-card--title">
                                                    <?php the_title(); ?>
                                                </h3>
                                                <p class="post-card--text"><?php echo get_the_date('d F Y'); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </main>
    </div>
    <section id="order" class="order">
        <div class="container">
            <div class="flex order__wrap">
                <div class="order__left">
                    <figure>
                        <img src="https://gurulovegame.ru/wp-content/uploads/2025/04/lv-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" class="perfmatters-lazy entered pmloaded" data-src="https://gurulovegame.ru/wp-content/uploads/2025/04/lv-1.png" data-ll-status="loaded"><noscript><img src="https://gurulovegame.ru/wp-content/uploads/2025/04/lv-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%"></noscript>
                    </figure>
                </div>
                <div class="order__right">
                    <h2><span>Создайте</span> свою любовь вместе</h2>

                    <div class="order__desc">
                        <span>«Любовь не Игра»</span> поможет вам в этом не только на словах, но и на деле                    </div>


                    <div class="order__box">
                        <h4><span>Приобрести игру</span> можно на популярных маркетплейсах</h4>
                        <div class="bts">
                            <a class="btn --ozon" href="https://ozon.onelink.me/SNMZ/1haf8ohr" target="_blank">Ozon</a>
                            <a class="btn --wb" href="https://www.wildberries.ru/catalog/191103568/detail.aspx?utm_campaign=646675-id-Sayt&amp;utm_source=&amp;utm_medium=cpc&amp;utm_content=product&amp;utm_term=191103568" target="_blank">Wildberries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="decor --first">
            <img src="/wp-content/uploads/2025/04/heart-2.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" class="perfmatters-lazy entered pmloaded" data-src="/wp-content/uploads/2025/04/heart-2.png" data-ll-status="loaded"><noscript><img src="/wp-content/uploads/2025/04/heart-2.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%"></noscript>
        </figure>
        <figure class="decor --second">
            <img src="/wp-content/uploads/2025/04/heart-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" class="perfmatters-lazy entered pmloaded" data-src="/wp-content/uploads/2025/04/heart-1.png" data-ll-status="loaded"><noscript><img src="/wp-content/uploads/2025/04/heart-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%"></noscript>
        </figure>
    </section>
<?php

get_footer();

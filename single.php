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

	<main id="primary" class="site-main">
        <section class="simplePost">
            <div class="container">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'content-parts/content', get_post_type() );

//                    the_post_navigation(
//                        array(
//                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'love-not-game' ) . '</span> <span class="nav-title">%title</span>',
//                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'love-not-game' ) . '</span> <span class="nav-title">%title</span>',
//                        )
//                    );

//                 If comments are open or we have at least one comment, load up the comment template.
//                    if ( comments_open() || get_comments_number() ) :
//                        comments_template();
//                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </section>
        <section id="order" class="order">
            <div class="container">
                <div class="flex order__wrap">
                    <div class="order__left">
                        <figure>
                            <img data-src="/wp-content/uploads/2025/04/lv-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" src="https://gurulovegame.ru/wp-content/uploads/2025/04/lv-1.png" class="ls-is-cached lazyloaded entered pmloaded" style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;" data-ll-status="loaded">
                        </figure>
                    </div>
                    <div class="order__right">
                        <h2><span>Создайте</span> свою любовь вместе</h2>

                        <div class="order__desc">
                            <span>«Любовь не Игра»</span> поможет вам в этом не только на словах, но и на деле                    </div>


                        <div class="order__box">
                            <h4><span>Приобрести игру</span> можно на популярных маркетплейсах</h4>
                            <div class="bts">
                                <a class="btn --ozon" href="https://www.ozon.ru/product/lyubov-ne-igra-nastolnaya-kvest-igra-dlya-par-dvoih-vlyublennyh-1695290679/" target="_blank">Ozon</a>
                                <a class="btn --wb" href="https://www.wildberries.ru/catalog/191103568/detail.aspx" target="_blank">Wildberries</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="decor --first">
                <img data-src="/wp-content/uploads/2025/04/heart-2.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" src="/wp-content/uploads/2025/04/heart-2.png" class="ls-is-cached lazyloaded entered pmloaded" style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;" data-ll-status="loaded">
            </figure>
            <figure class="decor --second">
                <img data-src="/wp-content/uploads/2025/04/heart-1.png" alt="Настольная Игра - Любовь не игра" width="100%" height="100%" src="/wp-content/uploads/2025/04/heart-1.png" class="entered pmloaded ls-is-cached lazyloaded" style="--smush-placeholder-width: 100px; --smush-placeholder-aspect-ratio: 100/100;" data-ll-status="loaded">
            </figure>
        </section>
	</main>

<?php
//get_sidebar();
get_footer();

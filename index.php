<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package love-not-game
 */

get_header();
?>

	<div class="archive-posts site-main">
        <div class="container">
            <div class="heading">
                <?php if (!is_singular()): ?>
                    <?php if (is_archive()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php
                                if (is_category()) {
                                    single_cat_title();
                                } else {
                                    the_archive_title();
                                }
                                ?>
                            </h1>
                        </div>
                    <?php elseif (is_category()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php
                                if (is_category()) {
                                    single_cat_title();
                                } else {
                                    the_archive_title();
                                }
                                ?>
                            </h1>
                        </div>
                    <?php elseif (is_home() && ! is_front_page()): ?>
                        <?php
                        $blog_page_id = get_option('page_for_posts');
                        if ( $blog_page_id ) :
                            $blog_page = get_post($blog_page_id);
                            ?>
                            <div class="mb-8">
                                <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                    <?= get_the_title($blog_page_id); ?>
                                </h1>
                            </div>
                            <div class="mb-5 md:mb-10 max-w-2xl m-auto text-sm xs:text-lg xl:text-xl text-gray text-center">
                                <?php echo apply_filters( 'the_content', $blog_page->post_content ); ?>
                            </div>
                        <?php endif; ?>
                    <?php elseif (is_tag()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php single_tag_title(); ?>
                            </h1>
                        </div>
                    <?php elseif (is_author()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php printf(__('Posts by %s', 'tailpress'), get_the_author()); ?>
                            </h1>
                        </div>
                    <?php elseif (is_day()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php printf(__('Daily Archives: %s', 'tailpress'), get_the_date()); ?>
                            </h1>
                        </div>
                    <?php elseif (is_month()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php printf(__('Monthly Archives: %s', 'tailpress'), get_the_date('F Y')); ?>
                            </h1>
                        </div>
                    <?php elseif (is_year()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php printf(__('Yearly Archives: %s', 'tailpress'), get_the_date('Y')); ?>
                            </h1>
                        </div>
                    <?php elseif (is_search()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php printf(__('Search results for: %s', 'tailpress'), get_search_query()); ?>
                            </h1>
                        </div>
                    <?php elseif (is_404()): ?>
                        <div class="mb-8">
                            <h1 class="my-4 md:my-6 text-2xl/7 xs:text-3xl md:text-4xl xl:text-6xl font-bold text-black text-center">
                                <?php _e('Page Not Found', 'tailpress'); ?>
                            </h1>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php if (have_posts()): ?>
                <div class="posts__loop">
                    <div class="grid-archive">
                        <?php while (have_posts()): the_post(); ?>
                            <?php  get_template_part( 'content-parts/content', get_post_type()); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="pagination-wrap">
                    <?php
                    the_posts_pagination([
                        'mid_size'  => 2,
                        'end_size'  => 1,
                        'prev_text' => '<span class="pagination__arrow pagination__arrow--prev"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M16.1141 17.3135C16.6285 17.8135 16.6285 18.6308 16.1141 19.1309C15.6077 19.6231 14.7925 19.623 14.286 19.1309L7.88563 12.9082C7.37146 12.4082 7.37146 11.5918 7.88563 11.0918L14.286 4.86914C14.7925 4.37703 15.6078 4.37688 16.1141 4.86914C16.6285 5.36921 16.6285 6.18644 16.1141 6.68652L10.6493 12L16.1141 17.3135Z" fill="white" /></svg></span>',
                        'next_text' => '<span class="pagination__arrow pagination__arrow--next"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M7.88588 6.68652C7.37153 6.18645 7.37154 5.36922 7.88588 4.86914C8.39227 4.37688 9.20753 4.37702 9.714 4.86914L16.1144 11.0918C16.6286 11.5918 16.6286 12.4082 16.1144 12.9082L9.71401 19.1309C9.20753 19.623 8.39227 19.6231 7.88588 19.1309C7.37153 18.6308 7.37154 17.8136 7.88588 17.3135L13.3507 12L7.88588 6.68652Z" fill="white" /></svg></span>',
                        'screen_reader_text' => ' ',
                    ]);
                    ?>
                </div>
            <?php endif; ?>
        </div>
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

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package love-not-game
 */

get_header();
?>

    <section class="error404">
        <div class="container">
            <div class="error404__content">
                <h1>404</h1>
                <h2>Упс! Эта страница не найдена.</h2>
                <a class="btn" href="<?=get_home_url()?>" target="_self">Вернуться на главную</a>
           </div>
        </div>
        <figure class="decor --first">
            <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
        </figure>
        <figure class="decor --second">
            <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
        </figure>
    </section>

<?php
get_footer();

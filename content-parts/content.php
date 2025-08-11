<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package love-not-game
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
</article>

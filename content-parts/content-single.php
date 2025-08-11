<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package love-not-game
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('my-post'); ?>>
    <div class="my-post__header">
        <h1 class="my-post__title"><?php the_title(); ?></h1>
        <?php if(! is_page()): ?>
            <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="single-post__date">
                <?php echo get_the_date(); ?>
            </time>
            <?php if(!empty($author)): ?>
                <p class="my-post__author">by <?=$author?></p>
            <?php endif;?>
        <?php endif; ?>
    </div>
    <?php if(has_post_thumbnail()): ?>
        <div class="my-post__thumbnail">
            <?php the_post_thumbnail('large', ['class' => 'single-post__image']); ?>
        </div>
    <?php endif; ?>

    <div class="my-post__content">
        <?php the_content(); ?>
    </div>
</article>

<?php
if (!function_exists('get_field')) {
    return;
}
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $link = get_sub_field('link');
?>
<section class="myBlog">
    <div class="container">
        <?php if(!empty($title)): ?>
            <h2 class="myBlog__title"><?=$title?></h2>
        <?php endif; ?>
        <?php if(!empty($subtitle)): ?>
            <p class="myBlog__text"><?=$subtitle?></p>
        <?php endif; ?>
        <div class="posts__loop">
            <div class="grid-archive">
                <?php
                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ];

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
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
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>Нет записей</p>';
                endif;
                ?>
            </div>
        </div>
        <?php if(!empty($link)): ?>
            <div class="myBlog__link">
                <a class="btn --primary" href="<?=$link['url'];?>" target="<?= (!empty($link['target'])) ? $link['target'] : '_self'?>"><?=$link['title'];?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
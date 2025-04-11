<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $count = -1;
    $count_post  = get_sub_field('count_post');
    if(!empty($count_post)){
        $count = $count_post;
    }
}


?>
<?php
// Получаем записи всех участников ( кроме текущего )
$args = array(
    'post_type' => 'services',
    'posts_per_page' => $count,
    'orderby' => 'date',
    'order' => 'ASC',
);

$specialist_loop = new WP_Query($args);
?>
<section id="services" class="tplServices">
    <div class="container">
        <div class="tplServices__heading">
            <?php if(!empty($title)) : ?>
                <h2 class="title"><?=$title;?></h2>
            <?php endif; ?>
        </div>
        <?php if ($specialist_loop->have_posts()) : ?>
        <div class="tplServices__loop">
            <?php while ($specialist_loop->have_posts()) : $specialist_loop->the_post(); ?>
                <figure class="services__card">
                    <a href="<?=get_permalink()?>" target="_self">
                        <div class="relative">
                            <div class="services__photo">
                                <?php custom_theme_post_thumbnail();?>
                            </div>
                            <?php if( have_rows('components') ): ?>
                                <?php while( have_rows('components') ): the_row(); ?>
                                    <?php
                                    if( get_row_layout() == 'welcome' ): ?>
                                        <div class="services__experience"><?php echo the_sub_field('price'); ?> ₽</div>
                                    <?php endif;
                                endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="services__title">
                            <h3> <?=get_the_title()?></h3>
                        </div>
                    </a>
                </figure>
            <?php endwhile; else:
                echo '<p>Других услуг в этой категории пока нет.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


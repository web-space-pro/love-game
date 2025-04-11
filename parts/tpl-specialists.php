<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $link  = get_sub_field('link');
    $persons = get_sub_field('persons');
}


?>
<?php
// Получаем записи всех участников ( кроме текущего )
$args = array(
    'post_type' => 'specialists',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
);

$specialist_loop = new WP_Query($args);
?>
<section id="specialist" class="tplSpecialist">
    <div class="container">
        <div class="tplSpecialist__heading">
            <?php if(!empty($title)) : ?>
                <h2 class="title"><?=$title;?></h2>
            <?php endif; ?>
            <?php if( isset($link) && !empty($link['url'])): ?>
                <a class="link-icon" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
            <?php endif; ?>
        </div>
        <?php if ($specialist_loop->have_posts()) : ?>
        <div class="tplSpecialist__loop">
            <?php while ($specialist_loop->have_posts()) : $specialist_loop->the_post(); ?>
                <figure class="specialist__card">
                    <a href="<?=get_permalink()?>" target="_self">
                        <div class="relative">
                            <div class="specialist__photo">
                                <?php custom_theme_post_thumbnail();?>
                            </div>
                            <?php if( have_rows('specialist') ): ?>
                                <?php while( have_rows('specialist') ): the_row(); ?>
                                    <?php
                                    if( get_row_layout() == 'specialist' ): ?>
                                        <div class="specialist__experience"><?php echo the_sub_field('experience'); ?></div>
                                    <?php endif;
                                endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="specialist__author">
                            <h3> <?=get_the_title()?></h3>
                        </div>
                        <?php if( have_rows('specialist') ): ?>
                            <?php while( have_rows('specialist') ): the_row(); ?>
                                <?php
                                if( get_row_layout() == 'specialist' ): ?>
                                    <div class="specialist__speciality"><?php echo the_sub_field('speciality'); ?></div>
                                <?php endif;
                            endwhile; ?>
                        <?php endif; ?>
                    </a>
                </figure>
            <?php endwhile; else:
                echo '<p>Других  специалистов в этой категории пока нет.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

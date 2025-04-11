<?php

?>

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

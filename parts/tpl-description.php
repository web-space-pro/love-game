<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
}
?>
<section class="description">
    <div class="container">
        <?php if(!empty($title)) : ?>
            <h2><?=$title?></h2>
        <?php endif; ?>
        <?php if(!empty($text)) : ?>
            <div class="description__desc">
                <?=$text?>
            </div>
        <?php endif; ?>
    </div>
</section>
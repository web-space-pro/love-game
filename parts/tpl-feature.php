<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $items  = get_sub_field('items');

}
?>
<section class="feature">
    <div class="container">
        <?php if(!empty($title)) : ?>
            <h2><?=$title?></h2>
        <?php endif; ?>

        <?php if(!empty($text)) : ?>
            <div class="feature__desc">
                <p><?=$text?></p>
            </div>
        <?php endif; ?>

        <?php if(!empty($items)) : ?>
            <div class="feature__items">
                <?php foreach ($items as $key=>$item):?>
                <div class="item">
                    <figure>
                        <img src="<?=$item['image']?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </figure>
                    <div>
                        <h3><?=$item['title']?></h3>
                        <p><?=$item['text']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
    <figure class="decor --first">
        <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
    <figure class="decor --second">
        <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
</section>
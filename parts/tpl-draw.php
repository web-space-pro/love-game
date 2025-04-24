<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $gift  = get_sub_field('gift');
    $presents  = get_sub_field('presents');

}
?>
<section class="draw">
    <div class="container">
        <?php if(!empty($gift)) : ?>
            <div class="draw__top">
                <?=$gift['title']?>
                <img class="gift" src="<?=$gift['image']?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
            </div>
        <?php endif; ?>

        <?php if(!empty($title)) : ?>
            <h2><?=$title?></h2>
        <?php endif; ?>

        <?php if(!empty($text)) : ?>
            <div class="draw__desc">
                <?=$text?>
            </div>
        <?php endif; ?>

        <?php if(!empty($presents)) : ?>
            <div class="draw__items">
                <?php foreach ($presents as $key=>$item):?>
                <div class="item">
                    <figure>
                        <img src="<?=$item['image']?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                    </figure>
                    <div>
                        <h3><?=$item['title']?></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($link)) : ?>
            <div class="draw__btn">
                <a class="btn --primary" href="<?=$link['url']?>" target="_self"><?=$link['title']?></a>
            </div>
        <?php endif; ?>
    </div>
    <figure class="decor --first">
        <img src="/wp-content/uploads/2025/04/heart-1.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
</section>
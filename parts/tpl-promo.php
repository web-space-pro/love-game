<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $game  = get_sub_field('game');
    $bg_game  = get_sub_field('bg_game');
    $items  = get_sub_field('items');

}
?>

<section id="about" class="promo">
    <div class="container">
        <?php if(!empty($title)) : ?>
            <div class="promo__head">
                <h2><?=$title?></h2>
            </div>
        <?php endif; ?>

        <div class="promo__content flex justify-between">
            <div class="promo__circle_image">
                <?php if(!empty($bg_game)) : ?>
                    <img src="<?=$bg_game?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                <?php endif; ?>
            </div>

            <?php if(!empty($game)) : ?>
                <figure class="promo__content__image">
                    <img src="<?=$game?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                </figure>
            <?php endif; ?>

            <?php if(!empty($items)) : ?>

            <div class="promo__content__items">
                <?php foreach ($items as $key=>$item):?>
                    <div class="item">
                    <h3><?=$item['title']?></h3>
                    <p><?=$item['text']?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <figure class="decor --first">
        <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
    <figure class="decor --second">
        <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
</section>

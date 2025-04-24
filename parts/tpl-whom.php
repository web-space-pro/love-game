<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $link  = get_sub_field('link');
    $items = get_sub_field('items');

}
?>

<section class="whom">
    <div class="container">
        <?php if(!empty($title)) : ?>
            <h2><?=$title?></h2>
        <?php endif; ?>

        <?php if(!empty($items)) : ?>
        <div class="whom__items">
            <?php foreach ($items as $key=>$item):?>
                <div class="item">
                    <figure>
                        <img src="<?=$item['image']?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </figure>
                <div>
                    <h3><?=$item['title']?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if(!empty($link)) : ?>
            <div class="whom__btn">
                <a class="btn --primary" href="<?=$link['url']?>" target="_self"><?=$link['title']?></a>
            </div>
        <?php endif; ?>

    </div>
</section>
<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $image  = get_sub_field('image');
    $text_order  = get_sub_field('text_order');
    $ozon = get_sub_field('ozon');
    $wb  = get_sub_field('wildberries');

}
?>

<section id="order" class="order">
    <div class="container">
        <div class="flex order__wrap">
            <div class="order__left">
                <?php if(!empty($image)) : ?>
                    <figure>
                        <img src="<?=$image?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </figure>
                <?php endif; ?>
            </div>
            <div class="order__right">
                <?php if(!empty($title)) : ?>
                    <h2><?=$title?></h2>
                <?php endif; ?>

                <?php if(!empty($text)) : ?>
                    <div class="order__desc">
                        <?=$text?>
                    </div>
                <?php endif; ?>


                <div class="order__box">
                    <?php if(!empty($text_order)) : ?>
                    <h4><?=$text_order?></h4>
                    <?php endif; ?>
                    <div class="bts">
                        <?php if(!empty($ozon)) : ?>
                            <a class="btn --ozon" href="<?=$ozon['url']?>" target="<?=$ozon['target']?>"><?=$ozon['title']?></a>
                        <?php endif; ?>
                        <?php if(!empty($wb)) : ?>
                            <a class="btn --wb" href="<?=$wb['url']?>" target="<?=$wb['target']?>"><?=$wb['title']?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="decor --first">
        <img src="/wp-content/uploads/2025/04/heart-2.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
    <figure class="decor --second">
        <img src="/wp-content/uploads/2025/04/heart-1.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
</section>
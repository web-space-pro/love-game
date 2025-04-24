<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $icon_text  = get_sub_field('icon_text');
    $link  = get_sub_field('link');
    $photo  = get_sub_field('photo');
    $cta_text  = get_sub_field('cta_text');
    $cta_icon  = get_sub_field('cta_icon');

}
?>
<section class="hero">
    <div class="container">
        <div class="hero__content flex gap-4">
            <div class="hero__heading">
                <?php if(!empty($title)) : ?>
                    <h1><?=$title?></h1>
                <?php endif; ?>

                <?php if(!empty($text)) : ?>
                    <div class="box flex item-center">
                        <figure>
                            <img src="<?=$icon_text?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                        </figure>
                        <p><?=$text?></p>
                    </div>
                <?php endif; ?>

                <?php if(!empty($link)) : ?>
                    <a class="btn --primary" href="<?=$link['url']?>" target="_self"><?=$link['title']?></a>
                <?php endif; ?>

            </div>
            <div class="hero__promo">
                <?php if(!empty($photo)) : ?>
                    <figure class="image">
                        <img src="<?=$photo?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </figure>
                <?php endif; ?>

                <?php if(!empty($cta_text)) : ?>
                    <div class="box">
                        <figure>
                            <img class="heartbeat" src="<?=$cta_icon?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                        </figure>
                        <div>
                            <h3><?=$cta_text?></h3>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
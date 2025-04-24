<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text_one  = get_sub_field('text_one');
    $text_second  = get_sub_field('text_second');
    $image  = get_sub_field('image');

}
?>
<section class="story">
    <div class="container">
        <div class="story__wrap" style="background-image: url('/wp-content/uploads/2025/04/2543384_14335-1.png');">
            <div class="flex gap-4 story__content">
                <div class="story__left">
                    <?php if(!empty($title)) : ?>
                        <h2><?=$title?></h2>
                    <?php endif; ?>

                    <?php if(!empty($text_one) || !empty($text_second) ) : ?>
                        <div class="box">
                            <?php if(!empty($text_one)) : ?>
                                <div class="item">
                                    <p><?=$text_one?></p>
                                    <figure class="img1">
                                        <img src="/wp-content/uploads/2025/04/star.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                                    </figure>
                                    <figure class="img2">
                                        <img src="/wp-content/uploads/2025/04/star.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                                    </figure>
                                    <figure class="img3">
                                        <img src="/wp-content/uploads/2025/04/star.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                                    </figure>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($text_second)) : ?>
                                <div class="item">
                                    <p><?=$text_second?></p>
                                    <figure class="img1">
                                        <img src="/wp-content/uploads/2025/04/gift.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                                    </figure>
                                    <figure class="img2">
                                        <img src="/wp-content/uploads/2025/04/gift.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                                    </figure>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(!empty($image)) : ?>
                    <div class="story__right">
                        <figure>
                            <img src="<?=$image?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                        </figure>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <figure class="decor --first">
        <img src="/wp-content/uploads/2025/04/heart.png" alt="<?=get_bloginfo()?>" width="100%" height="100%">
    </figure>
</section>
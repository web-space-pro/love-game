<?php

    $title = get_sub_field('title');
    $text= get_sub_field('text');

?>

<section class="tplText">
    <div class="container-secondary">
        <div class="tplText__bg">
            <div class="tplText__text">
                <div class="heading">
                    <div class="tplText__bgElem first">
                        <img src="/wp-content/uploads/2025/01/icon-sign.png" width="100%" height="100%" <?=bloginfo()?>">
                    </div>
                    <h2 class="tplText__title"><?=$title?></h2>
                </div>
                <div class="wp-block-content">
                    <?=$text?>
                </div>
            </div>
            <div class="tplText__bgElem second">
                <img src="/wp-content/uploads/2025/01/sign-1.png" width="100%" height="100%" alt="<?=bloginfo()?>">
            </div>
        </div>
    </div>
</section>

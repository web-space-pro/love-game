<?php
$g_about_us = get_field('g_about_us', 'options');
$g_title = $g_about_us['title'];
$g_text  = $g_about_us['text'];
$g_link  = $g_about_us['link'];
$g_photo = $g_about_us['photo'];
?>

<section class="tpl-aboutUs">
    <div class="container-secondary">
        <div class="tpl-aboutUs__bg">
            <?php if(!empty($g_title)) : ?>
                <div class="tpl-aboutUs__header">
                    <h2 class="title"><?=$g_title;?></h2>
                </div>
            <?php endif; ?>
            <div class="flex">
                <div class="tpl-aboutUs__content">
                    <?php if(!empty($g_text)) : ?>
                        <div class="text">
                            <?=$g_text;?>
                        </div>
                    <?php endif; ?>

                    <?php if( isset($g_link) && !empty($g_link['url'])): ?>
                        <a class="button button--bordered" href="<?=$g_link['url'];?>" target="<?=$g_link['target'];?>" ><?=$g_link['title'];?></a>
                    <?php endif; ?>
                </div>
                <?php if(!empty($g_photo)): ?>
                    <div class="tpl-aboutUs__image">
                        <div class="wrap">
                            <img src="<?=$g_photo?>" alt="<?= get_bloginfo(); ?>" width="100%" height="100%">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

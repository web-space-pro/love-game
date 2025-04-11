<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $photo = get_sub_field('photo');

    $show_template = get_sub_field('show_custom_template');

}
?>
<?php if( $show_template ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-parts" . DIRECTORY_SEPARATOR ."about-us.php"; ?>
<?php else: ?>
    <section class="tpl-aboutUs">
        <div class="container-secondary">
            <div class="tpl-aboutUs__bg">
                <?php if(!empty($title)) : ?>
                    <div class="tpl-aboutUs__header">
                        <h2 class="title"><?=$title;?></h2>
                    </div>
                <?php endif; ?>
                <div class="flex">
                    <div class="tpl-aboutUs__content">
                        <?php if(!empty($text)) : ?>
                            <div class="text">
                                <?=$text;?>
                            </div>
                        <?php endif; ?>

                        <?php if( isset($link) && !empty($link['url'])): ?>
                            <a class="button button--bordered" href="<?=$link['url'];?>" target="<?=$link['target'];?>" ><?=$link['title'];?></a>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty($photo)): ?>
                        <div class="tpl-aboutUs__image">
                            <div class="wrap">
                                <img src="<?=$photo?>" alt="<?= get_bloginfo(); ?>" width="100%" height="100%">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

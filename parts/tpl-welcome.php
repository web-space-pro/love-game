<?php

    $mark = get_sub_field('mark');
    $title = get_sub_field('title');

    $link = get_sub_field('link');
    $price = get_sub_field('price');

    $guaranteeList = get_sub_field('guarantee-list');
    $show_guaranteeList = get_sub_field('show_custom_guarantee');

    $sliderBanner = get_sub_field('slider-banner');

    $metrics = get_sub_field('metrics');
    $show_metrics = get_sub_field('show_custom_metrics');

    $show_map = get_sub_field('show_map');

    $show_contact_info = get_sub_field('show_contacts_info');




?>
<section class="tplWelcome">
    <div class="tplWelcome__wrap">
        <div class="container">
            <div class="tplWelcome__flex">
                <div class="tplWelcome__heading">

                    <?php if(!empty($mark)): ?>
                    <span class="mark"><?=$mark?></span>
                    <?php endif; ?>
                    <h1><?=$title?></h1>

                    <?php if(!empty($link) || !empty($price)): ?>
                    <div class="infoBox">
                        <?php if(!empty($link)): ?>
                            <a href="<?=$link['url']?>" class="button btn button--accent"><?=$link['title']?></a>
                        <?php endif; ?>

                        <?php if(!empty($price)): ?>
                            <span class="mark-price"><?=$price?> ₽</span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if($show_guaranteeList):
                    include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-parts" . DIRECTORY_SEPARATOR ."guarantee-list.php";
                 else: ?>
                    <?php if(!empty($guaranteeList)): ?>
                        <div class="tplWelcome__list">
                            <ul class="guarantee-list">
                                <?php foreach( $guaranteeList as $item ):?>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M13.8978 4.21875C13.9604 4.28125 14.023 4.375 13.9917 4.46875C13.9917 4.59375 13.9604 4.65625 13.8978 4.75L4.69519 13.9375C4.63259 14 4.56999 14 4.44478 14C4.35088 14 4.25697 14 4.19437 13.9375L0.0939039 9.8125C0.0313013 9.78125 0 9.6875 0 9.59375C0 9.46875 0.0313013 9.375 0.0939039 9.3125L0.97034 8.4375C1.03294 8.375 1.12685 8.34375 1.25205 8.34375C1.34596 8.34375 1.40856 8.375 1.47116 8.4375L4.44478 11.4062L12.5205 3.34375C12.5831 3.28125 12.6457 3.25 12.7396 3.25C12.8648 3.25 12.9587 3.28125 13.0213 3.34375L13.8978 4.21875ZM4.10047 7.9375L1.09555 4.90625C1.03294 4.84375 1.00164 4.75 1.00164 4.65625C1.00164 4.53125 1.03294 4.4375 1.09555 4.375L1.97198 3.5C2.06588 3.4375 2.15979 3.375 2.25369 3.375C2.3476 3.375 2.4415 3.4375 2.5041 3.5L4.38218 5.40625L9.6408 0.09375C9.7034 0.03125 9.7973 0 9.89121 0C10.0164 0 10.1103 0.03125 10.1729 0.09375L11.0494 1C11.112 1.0625 11.1746 1.15625 11.1746 1.25C11.1746 1.34375 11.112 1.4375 11.0494 1.53125L4.63259 7.9375C4.56999 8 4.50739 8 4.38218 8C4.28828 8 4.19437 8 4.10047 7.9375Z" fill="#999999" />
                                        </svg>
                                        <p><?=$item['value']?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if($show_contact_info)
        include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-parts" . DIRECTORY_SEPARATOR ."contact-info.php";
    ?>

    <?php if($show_map): ?>
        <div class="tplMap">
            <div class="container-secondary">
                <div id="map"></div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(!empty($sliderBanner)): ?>
    <div class="tplBanner">
        <div class="container-secondary">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    <?php foreach( $sliderBanner as $item ):?>
                    <div class="swiper-slide">
                        <img src="<?=$item?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if($show_metrics):
        include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-parts" . DIRECTORY_SEPARATOR ."metrics-list.php";
    else: ?>
    <?php if(!empty($metrics)): ?>
        <div class="tplMetrics">
            <div class="container">
                <div class="metrics">
                    <div class="metrics__list">
                        <?php foreach( $metrics as $item ):?>
                            <div class="metrics__item animate-fill">
                                <div class="wrap">
                                    <div class="metrics__icon">
                                        <img src="<?=$item['icon']?>" alt="alt" width="48px" height="48px">
                                    </div>
                                    <p class="metrics__title"><?=$item['title']?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php endif; ?>

</section>

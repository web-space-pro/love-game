<?php
    $title = get_sub_field('title');
    $licenses = get_sub_field('licenses');
?>
<section class="tplLicenses">
    <div class="container">
        <div class="tplLicenses__wrap">
            <div class="tplLicenses__heading">
                <h3 class="tplLicenses__title"><?=$title?></h3>
            </div>
            <?php if(!empty($licenses)): ?>
                <div class="tplLicenses__list">
                    <?php foreach ($licenses as $item): ?>
                        <?php
                        $text = $item['file']['caption'];
                        $maxLength = 35;
                        $trimmedText = mb_substr($text, 0, $maxLength) . (mb_strlen($text) > $maxLength ? "..." : "");
                        ?>
                        <div class="tplLicenses__item">
                            <a href="<?=$item['file']['url']?>" target="_blank">
                                <figure>
                                    <img src="<?=$item['img_preview']?>" alt="<?=bloginfo();?>" width="100%" height="100%">
                                </figure>
                            </a>
                            <?php if(!empty($trimmedText)): ?>
                                <a class="title" href="<?=$item['file']['url']?>" target="_blank"><?=$trimmedText;?></a>
                            <?php endif; ?>
                            <div class="captions">
                                <span><?=$item['file']['subtype']?>,</span>
                                <span><?=formatSizeUnits($item['file']['filesize'])?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
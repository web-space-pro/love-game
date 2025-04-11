<?php

?>

<figure class="services__card">
    <a href="<?=get_permalink()?>" target="_self">
        <div class="relative">
            <div class="services__photo">
                <?php custom_theme_post_thumbnail();?>
            </div>
        </div>
        <div class="services__title">
            <h3> <?=get_the_title()?></h3>
        </div>
    </a>
</figure>

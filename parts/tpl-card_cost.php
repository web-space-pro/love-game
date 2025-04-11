<?php
    $title = get_sub_field('title');
    $colum = get_sub_field('count_colums');
    $list = get_sub_field('list');
    $sta_item = get_sub_field('sta_item');
?>

<section class="tpl-cardCost">
    <div class="container">
        <div class="tpl-cardCost__header">
            <h2><?=$title?></h2>
        </div>
        <?php if(!empty($list)) : ?>
        <div class="grid grid-column-<?=($colum!='')? $colum :'4'?>">
            <?php foreach( $list as $key => $item ):?>
            <div class="card-cost">
                <h3><?=$item['title']?></h3>
                <span><?=$item['value']?></span>
            </div>
            <?php endforeach; ?>
            <?php if(!empty($sta_item)) : ?>
                <div class="card-cost cta">
                    <h3><?=$sta_item['title']?></h3>
                    <a class="button button--light" href="<?=$sta_item['link']['url']?>"><?=$sta_item['link']['title']?></a>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
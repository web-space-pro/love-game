<?php
    $title = get_sub_field('title');
    $licenses = get_sub_field('conditions');
?>

<section class="tplConditions">
    <div class="container">
        <div class="tplConditions__head">
            <h2><?=$title?></h2>
        </div>
        <?php if(!empty($licenses)): ?>
        <div class="grid-block">
            <?php foreach ($licenses as $item): ?>
            <div class="card-grid">
                <figure>
                    <?php if($item['settings_add'] == 'image'): ?>
                        <img src="<?=$item['image']?>" alt="<?=get_bloginfo()?>">
                    <?php else: ?>
                        <h3><?=$item['title']?></h3>
                    <?php endif; ?>
                </figure>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
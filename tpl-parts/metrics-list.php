<?php
$g_guaranteeList = get_field('g_metrics_list', 'options');
?>
<?php if(!empty($g_guaranteeList)): ?>
    <div class="tplMetrics">
        <div class="container">
            <div class="metrics">
                <div class="metrics__list">
                    <?php foreach( $g_guaranteeList['metrics_list'] as $item ):?>
                        <div class="metrics__item animate-fill">
                            <div class="wrap">
                                <div class="metrics__icon">
                                    <img src="<?=$item['icon']['url']?>" alt="<?=bloginfo()?>" width="48px" height="48px">
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

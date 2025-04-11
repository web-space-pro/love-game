<?php
    $show = get_sub_field('show');
    $titleCustom = get_sub_field('title');
    $titleHead = get_the_title();
    $title ='';
    if(!empty($titleCustom)){
        $title = $titleCustom;
    }else{
        $title = $titleHead;
    }
?>

<?php if($show): ?>
    <section class="tplContent">
        <div class="container">
            <div class="tplContent__text">
                <h2 class="tplContent__title"><?=$title?></h2>
                <div class="wp-block-content">
                    <?=get_the_content();?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

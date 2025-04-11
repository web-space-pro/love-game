<?php

    $title = get_sub_field('title');
    $questions = get_sub_field('questions');
    $show_tpl = get_sub_field('show_tpl');
?>



<?php if( $show_tpl ): ?>
    <?php include get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-parts" . DIRECTORY_SEPARATOR ."questions.php"; ?>
<?php else: ?>
    <?php if(!empty($questions)): ?>
        <section class="tplQuestions">
            <div class="container">
                <div class="tplQuestions__title">
                    <?php if(!empty($title)) : ?>
                        <h2 class="title"><?=$title;?></h2>
                    <?php endif; ?>
                </div>
                <?php if(!empty($questions)) : ?>
                    <div class="accordion-group">
                        <?php foreach( $questions as $key => $item ):?>
                            <div class="accordion">
                                <details class="accordion__details" name="faq" <?=($key==0)? 'open' :''?>>
                                    <summary class="accordion__summary">
                                        <h4 class="accordion__title">
                                            <span role="term" aria-details="faq-<?=$key?>"><?=$item['heading']?></span>
                                            <span class="btn-icon"></span>
                                        </h4>
                                    </summary>
                                </details>
                                <div
                                        class="accordion__content"
                                        id="faq-<?=$key?>"
                                        role="definition"
                                >
                                    <div class="accordion__content-inner">
                                        <div class="accordion__content-body">
                                            <?=$item['content']?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

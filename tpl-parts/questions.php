
<?php
$g_questions = get_field('g_questions', 'options');
$g_title = $g_questions['title'];
$g_questions = $g_questions['questions_list'];
?>
<?php if(!empty($g_questions)): ?>
    <section class="tplQuestions">
        <div class="container">
            <div class="tplQuestions__title">
                <?php if(!empty($g_title)) : ?>
                    <h2 class="title"><?=$g_title;?></h2>
                <?php endif; ?>
            </div>
            <?php if(!empty($g_questions)) : ?>
                <div class="accordion-group">
                    <?php foreach( $g_questions as $key => $item ):?>
                        <div class="accordion">
                            <details class="accordion__details" name="faq" <?=($key==0)? 'open' :''?>>
                                <summary class="accordion__summary">
                                    <h4 class="accordion__title">
                                        <span role="term" aria-details="faq-<?=$key?>"><?=$item['title']?></span>
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
                                        <?=$item['text']?>
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

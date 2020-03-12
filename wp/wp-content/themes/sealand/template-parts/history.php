<?php
    $title = get_field('history__title');
    $left = get_field('history__left');
    $right = get_field('history__right'); ?>

    <div class="c-history anim anim--up">
        <div class="o-section">
            <div class="o-wrap">
                
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?= $title; ?></h2>
                </div>
                
                <div class="o-cols o-cols--2">
                    <div class="o-cols__item anim anim--up">
                        <div class="o-lead o-lead--2">
                            
                            <p><?= $left; ?></p>

                        </div>
                    </div>
                    
                    <div class="o-cols__item anim anim--delay2 anim--up">
                        <article class="o-article">

                            <?= $right; ?>
              
                        </article>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

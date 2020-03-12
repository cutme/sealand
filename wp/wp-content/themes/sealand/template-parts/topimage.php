<?php
    
    $title = get_field('top__title');
    $image = get_field('top__background');

    if ($image) {
        $size = 'top';
        $thumb = $image['sizes'][ $size ];
    } ?>

    <div class="c-topimage" style="background-image: url(<?php echo esc_url($thumb); ?>);">
        <div class="o-wrap">
            <div class="o-title">
                <h1 class="o-lead anim anim--delay4 anim--right"><?= $title; ?></h1>
            </div>
        </div>        
    </div>

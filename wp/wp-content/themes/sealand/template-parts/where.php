<?php
    $article = get_field('article');
    
    $image = get_field('map');

    if ($image) {
        $size = 'where-map';
        $thumb = $image['sizes'][ $size ];
    } ?>

    <div class="c-where anim anim--up">
        <div class="o-section">
            <div class="o-wrap">
    
                <div class="o-cols o-cols--2f">
                    <div class="o-cols__item">
                        <div class="o-article">
                            
                            <?= $article; ?>
                            
                        </div>
                    </div>
                    
                    <div class="o-cols__item">
                        <div class="c-where__map">
                            <img src="<?php echo esc_url($thumb); ?>" alt="map" width="1162" height="721">
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

<?php
    
    $left = get_field('left_column');
    $right = get_field('right_column');
    
    $title = $left['title'];
    $article = $left['article']; ?>
    
    <div class="c-certificates">
        <div class="o-section">
            <div class="o-wrap">
            
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?= $title; ?></h2>
                </div>
    
                <div class="o-cols o-cols--2 anim anim--up">
                    <div class="o-cols__item">
                        <div class="o-article">

                            <?= $article; ?>

                        </div>
                    </div>
                    
                    <div class="o-cols__item">

                    <?php if( have_rows('certificates') ): ?>
            
                    	<ul class="c-certificates__list">
            
                    	<?php while( have_rows('certificates') ): the_row(); 

                    		$icon = get_sub_field('icon');
                    		$image = get_sub_field('image');
                    		$description = get_sub_field('description'); 
                    		
                            if ($icon) {
                                $size = 'certificate-icon';
                                $thumbIcon = $icon['sizes'][ $size ];
                            }
                                                		
                    		if ($image) {
                                $size = 'certificate-image';
                                $thumbImage = $image['sizes'][ $size ];
                            } ?>
            
                            <li>
                                <div class="icon">
                                    <img src="<?php echo esc_url($thumbIcon); ?>" width="120" height="120" alt="">
                                </div>
                                
                                <div class="description">
                                    <div class="o-article">
                                        <p><?= $description; ?></p>
                                    </div>
                                    
                                    <a href="<?php echo esc_url($thumbImage); ?>" class="o-btn o-btn--minor js-image"><?php pll_e('Zobacz certyfikat'); ?></a>
                                </div>
                            </li>
                            
                        <?php endwhile; ?>
                          
                        </ul>
                        
                    <?php endif; ?>
                        
                    </div>
                </div>
    
            </div>
        </div>
    </div>

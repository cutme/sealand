<?php
    
    $title = get_fields("methods__title");
    $lead = get_fields("methods__lead");
    
    ?>
    
    <div class="c-methods u-padding">
        <div class="o-section bg-gray">            
            <div class="o-wrap">                                
                
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?= $title; ?> Sprawdzone metody</h2>
                </div>
                
                <div class="o-article o-article--big anim anim--up">
                    
                    <?= $lead; ?>
                    
                    <p>Dotrzymujemy</p>
                    <p>najwyższych standardów.</p>
                    
                    <p>&nbsp;</p>
                </div>


        <?php if( have_rows('methods') ): ?>

                <ul class="o-cols o-cols--3 o-cols--list anim anim--up">

        	<?php while( have_rows('methods') ): the_row(); 
        
        		$image = get_sub_field('icon');
        		$name = get_sub_field('name'); 
        		
        		if ($image) {
                    $size = 'methods-icon';
                    $thumb = $image['sizes'][ $size ];
                } ?>
                    
                    <li class="o-cols__item anim anim--left">
                        <dl class="o-iconbox">
                            <dt class="icon">
                                <img src="<?php echo esc_url($thumb); ?>" alt="" width="40" height="35">
                            </dt>

                            <dd>
                                <span class="name"><?= $name; ?></span>
                            </dd>
                        </dl>
                    </li>
                
            <?php endwhile; ?>
                    
                </ul>
                
        <?php endif; ?>
        
            </div>
        </div>
    </div>

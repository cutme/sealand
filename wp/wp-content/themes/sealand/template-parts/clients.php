<?php
    
    $image = get_field('clients__photo');
    $title = get_field('clients__title');
    $lead = get_field('clients__lead');

    if ($image) {
        $size = 'clients-photo';
        $thumb = $image['sizes'][ $size ];
    } ?>
    
    
    <div class="c-clients">
        
        <div class="c-clients__image">
            <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo esc_url($thumb); ?>" alt="" width="1240" height="620">
        </div>
        
        <div class="o-section bg-gray">            
            <div class="o-wrap">                                
                
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?= $title; ?></h2>
                </div>
                
                <div class="o-article o-article--big">
                    
                    <?= $lead; ?>

                </div>

            
        <?php if( have_rows('clients') ): ?>

	            <ul class="o-cols o-cols--3 o-cols--list">

        	<?php while( have_rows('clients') ): the_row(); 
        
        		$image = get_sub_field('icon');
        		$name = get_sub_field('name'); 
        		
        		if ($image) {
                    $size = 'clients-icon';
                    $thumb = $image['sizes'][ $size ];
                } ?>

                    <li class="o-cols__item anim anim--up">
                        <dl class="o-iconbox">
                            <dt class="icon">
                                <img src="<?php echo esc_url($thumb); ?>" alt="" width="60" height="60">
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

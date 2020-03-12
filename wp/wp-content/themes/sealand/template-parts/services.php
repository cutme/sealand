
    <div class="c-services">
        <div class="o-section">
            <div class="o-wrap">
            
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?php pll_e('Nasze usługi'); ?></h2>
                </div>
<?php

    $args = array(
        'post_type' => 'post',
		'posts_per_page' => -1,
        'order' => 'ASC'
	);

	$the_query = new WP_Query($args);

    	if ( $the_query->have_posts() ) : 

      		while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          		
          		<div class="o-cols anim anim--up">	
                    
                    <div class="o-cols__item">
                        
                        <div class="c-services__title">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/icon-contact.png" alt="" width="100" height="100">
                            </div>
                        
                            <span class="name"><?php the_title(); ?></span>
                        </div>

                    </div>
                    
                    <div class="o-cols__item">
                        <div class="o-article">
                            
                            <?php the_content(); ?>
                            
                        </div>
                    </div>
                    
                    <div class="o-cols__item">
                        <a href="<?php the_permalink(); ?>" class="o-btn o-btn--minor"><?php pll_e('Zobacz szczegóły'); ?></a>
                    </div>                    
                </div>
                
            <?php endwhile; ?>
        <?php wp_reset_query(); endif; ?>
                
                
                    
            </div>
        </div>
    </div>
    

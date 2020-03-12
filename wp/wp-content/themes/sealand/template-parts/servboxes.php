
    <div class="c-servboxes" id="uslugi">
        <div class="o-wrap">
            <div class="o-section">
                
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--right">Nasze usługi</h2>
                </div>
                
<?php

    $args = array(
        'post_type' => 'post',
		'posts_per_page' => 4,
        'order' => 'ASC'
	);

	$the_query = new WP_Query($args);

    	if ( $the_query->have_posts() ) : ?>
	
	            <div class="o-cols">

            <?php
          		while( $the_query->have_posts() ) : $the_query->the_post(); ?>			
                
                    <div class="o-cols__item anim anim--up">
                        <a href="<?php the_permalink(); ?>" class="o-box">
                            
                            <div class="o-box__title">
                                <i class="icon-services-1"></i>
                                <span class="o-lead o-lead--3"><?php the_title(); ?></span>
                            </div>
                            
                        <?php
                        	if (has_post_thumbnail( $post->ID ) ):
                            	$thumbnail_id = get_post_thumbnail_id( $post->ID );
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'service' ); ?>
                            	
                            <img src="<?= $image[0]; ?>" alt="<?= $alt; ?>" width="295" height="440">
                            	
                        <?php
                            endif; ?>                                
                            
                        </a>
                    </div>
                 
            <?php
              	endwhile; ?>
              	
              	</div>
    
    <?php
      	wp_reset_query(); 
    	endif; ?>
 
            </div>
        </div>
    </div>

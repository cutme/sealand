<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

    <?php get_template_part('template-parts/topimage'); ?>
    

    <div class="c-contact">
        <div class="o-section">
            <div class="o-wrap">
                
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right">Napisz do nas</h2>
                </div>
                
                <div class="o-cols o-cols--2">
                    <div class="o-cols__item anim anim--up">

                        <article class="o-article">
                            
                            <?php the_field('contact__left'); ?>
                            
                        </article>
                    </div>

        
            <?php if( have_rows('contact__address') ): ?>
        
        	        <div class="o-cols__item anim anim--delay2 anim--up">
        
            	<?php while( have_rows('contact__address') ): the_row(); 
            
            		$icon = get_sub_field('icon');
            		$address = get_sub_field('address'); 
            		
            		if ($icon) {
                        $size = 'contact-icon';
                        $thumb = $icon['sizes'][ $size ];
                    } ?>
                            
                        <dl class="o-iconbox">
                            <dt class="icon">
                                <img src="<?php echo esc_url($thumb); ?>" alt="" width="70" height="70">
                            </dt>
                            
                            <dd>
                                <div class="o-article">
                                    
                                    <?= $address; ?>
                                    
                                </div>
                            </dd>
                        </dl>
                        
                <?php endwhile; ?>
                        
                    </div>
                    
            <?php endif; ?>
                    
                </div>                
            </div>
        </div>

        <div class="c-map u-padding">
            
<?php
    $lat = get_field('map__lat', "Options");
    $lng = get_field('map__lng', "Options"); ?>
            
            <div class="c-map__area is-loading js-map" data-lat="<?= $lat; ?>" data-lng="<?= $lng; ?>" data-marker="<?php echo get_template_directory_uri(); ?>/img/assets/icon-pin.png"></div>
        </div>
    </div>


    <?php get_footer(); ?>

</body>
</html>


<?php
/**
 * Template Name: Cooperation
 */
get_header(); ?>

    <?php get_template_part('template-parts/topimage'); ?>


    <div class="c-cooperation">
        
        <div class="c-cooperation__tabs">
            <div class="o-wrap">
                <ul>
                    <li>
                        <a href="#klienci" class="o-btn o-btn--minor js-goto">Jestem klientem</a>
                    </li>
                    
                    <li>
                        <a href="#przewoznicy" class="o-btn o-btn--minor js-goto">Jestem przewoźnikiem</a>
                    </li>
                    
                    <li>
                        <a href="#kierowcy" class="o-btn o-btn--minor js-goto">Jestem kierowcą</a>
                    </li>
                </ul>
            </div>
        </div>

        
        <div class="o-section">
            <div class="o-wrap">
            
                <div id="klienci">
                    <div class="o-header o-header--shape">
                        <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right">Klienci korporacyjni</h2>
                    </div>
    
                    <div class="o-cols o-cols--2">
                        <div class="o-cols__item">
                            
                            <article class="o-article">
                                
                                <?php the_field('clients__left'); ?>
                                
                            </article>
                        </div>
                        
                        <div class="o-cols__item">
                            <article class="o-article">
                                
                                <?php the_field('clients__right'); ?>
                                
                            </article>
                        </div>
                    </div>
                    
<?php
    $image = get_field('clients__photo');
    
    if ( $image ) :
    
        $alt = $image['alt'];
        $size = 'cooperation';
        $thumb = $image['sizes'][ $size ] ?>
    
                    <div class="c-cooperation__image c-cooperation__image--1">
                        <img src="<?php echo esc_url($thumb); ?>" alt="" width="1240" height="620">
                    </div>
                    
<?php endif; ?>
                    
                </div>


                <div id="przewoznicy">
                    <div class="o-header o-header--shape">
                        <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right">Przewoźnicy</h2>
                    </div>
    
                    <div class="o-cols o-cols--2">
                        <div class="o-cols__item">
                            
                            <article class="o-article">
                                
                                <?php the_field('operators__left'); ?>
                                
                            </article>
                        </div>
                        
                        <div class="o-cols__item">
                            <article class="o-article">
                                
                                <?php the_field('operators__right'); ?>
                                
                            </article>
                        </div>
                    </div>
                </div>  
            </div>
        </div>




        <div class="c-cooperation__drivers u-padding">
            <div class="o-section">
                
                
<?php
    $image = get_field('drivers__photo');
    
    if ( $image ) :
    
        $alt = $image['alt'];
        $size = 'cooperation';
        $thumb = $image['sizes'][ $size ] ?>
    
                <div class="c-cooperation__image c-cooperation__image--2">
                    <img src="<?php echo esc_url($thumb); ?>" alt="" width="1240" height="620">
                </div>
                    
<?php endif; ?>

                <div class="o-section bg-gray">            
                    <div class="o-wrap">
                        
                        <div id="kierowcy">
                            <div class="o-header o-header--shape">
                                <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right">Kierowcy</h2>
                            </div>
                            
                            <div class="o-cols o-cols--2">
                                <div class="o-cols__item">
                                    
                                    <article class="o-article">
                                        
                                        <?php the_field('drivers__left'); ?>
                                        
                                    </article>
                                </div>
                                
                                <div class="o-cols__item">
                                    <article class="o-article">
                                        
                                        <?php the_field('drivers__right'); ?>
                                        
                                    </article>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>

</body>
</html>



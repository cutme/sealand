<?php get_header(); ?>

    get_header(); ?>

    <?php get_template_part('template-parts/topimage'); ?>
    
    <div class="c-service anim anim--up">
        <div class="o-section">
            <div class="o-wrap">
            
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 splitting--right js-split" data-splitting><?php the_field('single__title'); ?></h2>
                </div>

                <div class="o-cols o-cols--2">
                    <div class="o-cols__item">
                        
                        <dl class="o-iconbox">
                            <dt class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/icon-contact.svg" alt="" width="70" height="70">
                            </dt>
                            
                            <dd>
                                <div class="o-article">
                                    
                                    <?php the_field('single__left'); ?>
                                    
                                </div>
                            </dd>
                        </dl>
                        
                    </div>
                    
                    <div class="o-cols__item">
                        <article class="o-article">
                            
                            <?php the_field('single__right'); ?>
                            
                        </article>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/quality'); ?>

    <?php get_footer(); ?>

</body>
</html>

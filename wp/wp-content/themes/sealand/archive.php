<?php
/**
 * The template for displaying archive pages
 *
 */

get_header(); ?>

    <?php get_template_part('template-parts/top'); ?>
    <?php get_template_part('template-parts/topbar'); ?>

    <div class="o-container">
        
        <div class="c-news u-toppadding" style="margin-bottom: 100px">
            <div class="o-section o-section--paddings">
                <div class="o-wrap o-wrap--narrow2">
                
                        
                    <article class="o-article o-article--margin o-article--big aligncenter">
                        <h1><?php echo get_the_title(12); ?></h1>
                        
                        <?php
                            $my_id = 12;
                            $post_id_5369 = get_post($my_id);
                            $content = $post_id_5369->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]>', $content);
                            echo $content;
                        ?>

                    </article>
                    

                <?php get_template_part('template-parts/content/filters-light'); ?>

            	<?php if ( have_posts() ) : ?>
            
                    <ul class="c-news__list">
                    
                    <?php while ( have_posts() ) : the_post(); ?>

                        <li class="c-news__item anim anim--up">
                            <div class="o-box">
                                <div class="o-avatar">
                                    
                                    <?php get_template_part('template-parts/content/avatar-image'); ?>
                                    <?php get_template_part('template-parts/content/categories'); ?>

                                </div>

                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <a href="<?php the_permalink(); ?>">

                        <?php if (has_post_thumbnail( $post->ID ) ): ?>

                                <div class="photo">
                                    
                                    <?php get_template_part('template-parts/content/thumbnail-big'); ?>
                                    
                                </div>
        
                        <?php endif; ?>
                                    
                                </a>
    
                                <article class="o-article">
                                    
                                    <?php the_content(); ?>
                                    
                                </article>
                                
                                <?php get_template_part('template-parts/content/meta'); ?>
                                <?php get_template_part('template-parts/content/share'); ?>

                            </div>
                        </li>
                        
                    <?php endwhile; ?>

                    </ul>          		
            
            <?php
              	wp_reset_query(); 
            	endif; ?>

                    
                </div>
            </div>
        </div>
        
        <?php get_template_part('template-parts/newsletter'); ?>

    </div>
    

    <?php get_footer(); ?>
    <?php get_template_part('template-parts/cookies'); ?>
    	

<?php wp_footer(); ?>

</body>
</html>

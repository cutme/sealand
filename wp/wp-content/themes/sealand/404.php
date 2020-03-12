<?php
/**
 * The template for 404
 *
 */

get_header(); ?>


        <section class="c-welcome" id="welcome">
			<div class="o-container__left js-leftColumn">
    			
				<?php get_template_part('template-parts/sidebar'); ?>
				
			</div>
    
            <div class="o-container__right js-rightColumn bg-white">
    			<div class="c-post c-post--page c-post--search">
						
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cutme' ); ?></h1>					

				</div>
    			
			</div>
        </section>


        <div class="o-container__left o-container__left--floating js-leftColumn">

			<?php get_template_part('template-parts/sidebar'); ?>

		</div>

                                             
		
		<div class="o-container__right js-rightColumn">


			<?php get_footer(); ?>
		</div>
	</main>
	
	<?php get_template_part('template-parts/sidemenu'); ?>
    <?php get_template_part('template-parts/nav'); ?>


<?php wp_footer(); ?>

</body>
</html>

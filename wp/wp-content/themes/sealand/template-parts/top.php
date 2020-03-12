
    <div class="c-top">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="o-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/assets/logo-sealand.svg" width="180" height="56" alt="sealand">
        </a>

        <nav class="c-nav js-nav">
            
            <?php
                wp_nav_menu( array(
                    'container'       => 'ul',
                    'menu_class'      => 'c-nav__menu js-menu',
                    'theme_location'  => 'Top',
                ) );
            ?>

            <ul class="c-lang"><?php pll_the_languages(array('show_flags'=>0, 'display_names_as'=>'slug', 'show_names'=>1, 'hide_current'=> 1)); ?></ul>
        </nav>
        
        

        <div class="o-hamburger js-hamburger"></div>
    </div>

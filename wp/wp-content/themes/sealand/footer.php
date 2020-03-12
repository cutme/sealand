<?php
    
    $left = get_field('footer__left', 'Options');
    $right = get_field('footer__right', 'Options'); ?>
    
    <footer class="c-footer">
        <div class="o-wrap">
            <div class="o-cols">
                <div class="o-cols__item">
                     
        <a href="index.html" class="o-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/assets/logo-sealand.svg" width="180" height="56" alt="sealand">
        </a>

                </div>
                
                <div class="o-cols__item">
                    
                    <div class="c-footer__address">
                        <i class="icon-mail"></i>
                        <address>
                        
                            <?= $left; ?>
                        
                        </address>
                    </div>
                </div>
                
                <div class="o-cols__item">
                    <div class="c-footer__address">
                        <i class="icon-contact"></i>
                        <address>
                        
                            <?= $right; ?>
                            
                        </address>
                    </div>
                </div>
                
                <div class="o-cols__item">
                    <p>
                        <a href="/polityka-prywatnosci">Polityka prywatności</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    
    <?php wp_footer(); ?>


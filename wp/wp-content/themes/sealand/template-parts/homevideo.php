
    <div class="c-homevideo">
        <div class="o-wrap">
            <div class="o-title">
                <h1 class="o-lead anim anim--delay4 anim--right">
                    <?php the_field('video__lead'); ?>
                </h1>
            </div>
            
            <a href="#uslugi" class="icon-arrow-down js-goto"></a>
        </div>
        
<?php
    $file = get_field('video__file');
    if( $file ): ?>
            
        <div id="video" data-url="<?php echo $file['url']; ?>" class="c-homevideo__item"></div>

<?php endif; ?>        

    </div>

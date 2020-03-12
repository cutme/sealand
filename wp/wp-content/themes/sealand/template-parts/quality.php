
<?php
    $title = get_field('quality__title', 'Options'); ?>
    
    <div class="c-quality u-padding anim anim--up">
        <div class="o-section bg-gray">
            <div class="o-wrap">
            
                <div class="o-header o-header--shape">
                    <h2 class="o-lead o-lead--2 anim anim--delay4 anim--right"><?= $title; ?></h2>
                </div>
    
            <?php if( have_rows('quality__items', 'Options') ): ?>
            
            	<div class="o-cols o-cols--2 anim anim--up">
            
            	<?php while( have_rows('quality__items', 'Options') ): the_row(); 
    
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    $email = get_sub_field('email');
                    $phone = get_sub_field('phone'); ?>
                    
                    <div class="o-cols__item">
                        <dl class="o-addressbox">
                            <dt>
                                <i class="icon-contact"></i>
                            </dt>
                            
                            <dd>
                                <div class="lead">
                                    <p class="name"><?= $name; ?></p>
                                    <p><?= $position; ?></p>
                                </div>
                                
                                <p>Masz pytanie? Chętnie odpowiem</p>
                                <p><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                                <p><?= $phone; ?></p>
                            </dd>
                        </dl>
                    </div>
                    
                <?php endwhile; ?>
                    
                </div>
                
            <?php endif; ?>
    
            </div>
        </div>
    </div>

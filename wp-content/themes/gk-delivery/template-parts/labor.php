<?php 
$labor = get_field('labor');?>
<section id="labor" class="section labor">
    <div class="container">
        <div class="labor-global">
            <div class="labor-description">
                <?php if ($labor['title']) :?>
                    <h3 class="labor-title">
                        <?php echo $labor['title'];?>
                    </h3>
                <?php endif;?>
                <?php if ($labor['text']) :?>
                    <div class="labor-text">
                        <?php echo $labor['text'];?>
                    </div>
                <?php endif;?>
            </div>
            <div class="colons-slider">
                <?php
                if(isset($labor['repeater'])):
                    foreach($labor['repeater'] as $labor_repeater) { ?>
                        <div class="labor-col">
                            <div class="labor-card">
                                <?php if ($labor_repeater['image']) :?>
                                    <div class="labor-img">
                                        <?php echo wp_get_attachment_image($labor_repeater['image']['ID'], 'primary') ;?>
                                    </div>
                                <?php endif;?>
                                <div class="labor-info">
                                    <?php if ($labor_repeater['number']) :?>
                                        <div class="number">
                                            <?php echo ($labor_repeater['number']) ;?>
                                        </div>
                                    <?php endif;?>
                                    <?php if ($labor_repeater['title']) :?>
                                        <h4 class="labor-title">
                                            <?php echo ($labor_repeater['title']) ;?>
                                        </h4>
                                    <?php endif;?>
                                    <?php if ($labor_repeater['text']) :?>
                                        <div class="labor-text">
                                            <?php echo ($labor_repeater['text']) ;?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php } ;
                endif;?>
            </div>
            <div class="section-button">
                <?php 
                $link = get_field('btn_primary');
                    if( $link ): 
                    $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <a class="btn btn-primary" href="#contacts" target="<?php echo esc_attr( $link['title'] ); ?>">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>   
    </div>
</section>
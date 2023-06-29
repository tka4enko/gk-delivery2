<?php $modconf = get_field('modal_confirmation', 'options') ;?>
<?php $modal_out = get_field('modal_out', 'options') ;?>
<?php if($modconf):?>
    <div class="modal fade" id="confirmation">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <?php if ($modconf['image']) :?>
                    <div class="image-modal">
                        <?php echo wp_get_attachment_image($modconf['image']['ID'], 'full');?>
                    </div>
                <?php endif;?>
                <?php if ($modconf['title']) :?>
                    <h4 class="title-modal">
                        <?php echo $modconf['title'];?>
                    </h4>
                <?php endif;?>
                <?php if ($modconf['text']) :?>
                    <div class="text-modal">
                        <?php echo $modconf['text'];?>
                    </div>
                <?php endif;?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif;?>
<?php if($modal_out):?>
    <div class="modal fade" id="modal-out">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <?php if ($modal_out['image']) :?>
                    <div class="image-modal">
                        <?php echo wp_get_attachment_image($modal_out['image']['ID'], 'full');?>
                    </div>
                <?php endif;?>
                <?php if ($modal_out['title']) :?>
                    <h4 class="title-modal">
                        <?php echo $modal_out['title'];?>
                    </h4>
                <?php endif;?>
                <?php if ($modal_out['text']) :?>
                    <div class="text-modal out">
                        <?php echo $modal_out['text'];?>
                    </div>
                <?php endif;?>
                <div class="section-button">
                    <?php 
                    $link = get_field('btn_primary');
                    if( $link ): 
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <?php if($link['title']):?>
                            <a href="#contacts" class="btn btn-primary"><?php echo esc_attr( $link['title'] ); ?></a>
                        <?php endif;?>
                    <?php endif;?>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif;?>

<?php 
$form = get_field('forms');?>
<section id="contacts" class="form">
    <div class="container-gl">
        <div class="form-global">
            <div class="container">
                <div class="form-description">
                    <?php if ($form['form_title']) :?>
                        <h3 class="form-description-title">
                            <?php echo $form['form_title'] ;?>
                        </h3>
                    <?php endif;?>
                    <?php if ($form['form_text']) :?>
                        <div class="form-description-text">
                            <?php echo $form['form_text'] ;?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-contact">
                    <?php if ($form['form_image']) :?>
                        <div class="form-image">
                            <?php 
                            echo wp_get_attachment_image($form['form_image']['ID'], 'full');?>
                        </div>
                    <?php endif;?>
                    <div class="form-application">
                        <?php echo do_shortcode('[contact-form-7 id="127" title="Form Application"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
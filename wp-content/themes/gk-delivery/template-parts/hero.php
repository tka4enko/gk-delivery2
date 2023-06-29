<?php 
$hero = get_field('hero');?>
<section class="section-hero">
    <div class="container-gl">
        <div class="decor">
            <img src="<?php echo get_template_directory_uri().'/assets/images/decor.png';?>">
        </div>
        <div class="hero-general">
            <div class="hero-general-left">
                <?php if ($hero['title']) :?>
                    <h1 class="hero-title">
                        <?php echo $hero['title'] ;?>
                    </h1>
                <?php endif;?>
                <?php if ($hero['text']) :?>
                    <div class="hero-text">
                        <?php echo $hero['text'];?>
                    </div>
                <?php endif;?>
                <div class="section-button">
                    <?php 
                    $link = get_field('btn_primary');
                        if( $link ): 
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a class="btn btn-secondary" href="#contacts" target="<?php echo esc_attr( $link['title'] ); ?>">
                            <?php echo esc_html( $link['title'] ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="hero-general-right">
                <?php if ($hero['image']) :?>
                    <div class="hero-general-right-img">
                        <?php echo wp_get_attachment_image($hero['image']['ID'], 'full');?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
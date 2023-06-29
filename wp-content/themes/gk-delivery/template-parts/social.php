<?php $socials = get_field('socials', 'options');?>
<ul class="social">
    <?php if(isset($socials)):
        foreach($socials as $social) { ?>
            <li>
                <a href="<?php echo $social['link'];?>">
                    <?php echo getImage($social['icon']);?>
                </a>
            </li>
        <?php } ;?>
    <?php endif ;?>
</ul>
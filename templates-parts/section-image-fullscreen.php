<?php

$background = get_field('arriere-plan-nl','options');
$texte = get_field('texte_newsletter','options');
$cta = get_field('cta_newsletter','options');

?>

<div id="section-fullscreen" <?php if($background):?>style= "background:<?php echo $background;?>;"<?php endif;?>>
    <div class="container columns">
        <div class="colg from-bottom">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
            <?php endif;?>
        </div>
        <div class="cold"></div>
    </div>
</div>
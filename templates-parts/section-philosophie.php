<?php 

$text = get_field('titre_mission');
$img = get_field('image_mission');
$cta = get_field('cta_mission');

?>  

<div id="section-philosophie">        
    <div class="container columns">
        <div class="colg">
            <?php if($img):?>
                <img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>" />
            <?php endif;?> 
        </div>

        <div class="cold from-bottom">
            <?php if($text): echo $text; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
            <?php endif;?>
        </div>
    </div>
</div>
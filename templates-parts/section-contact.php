<?php 

$description = get_field('texte_contact','options');
$formulaire = get_field('formulaire','options');
$banner = get_field('banner-contact','options');

?>

<div id="section-contact">
    <?php if($banner):?>
        <div class="banner">
            <img src="<?php echo $banner['url'];?>" />
        </div>
    <?php endif;?>

    <div class="container from-left">
            <?php if($description): echo $description; endif;?>
            <?php if($formulaire): echo do_shortcode($formulaire); endif;?>
    </div>
</div>

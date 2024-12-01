<?php 
    $actif = get_field('actif_section_2');
    $titre = get_field('titre_section_2');
    $image = get_field('image_section_2');
    $texte = get_field('texte_section_2');
?>

<?php if($actif):?> 
    <div id="section-contemporain">
        <?php if($image):?>
            <div class="block-img">
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['name'];?>" />
            </div>
        <?php endif;?>

        <div class="container">
            <?php if($titre): echo $titre; endif;?>
            <?php if($texte): echo $texte; endif;?>
        </div>
    </div>
<?php endif;?>
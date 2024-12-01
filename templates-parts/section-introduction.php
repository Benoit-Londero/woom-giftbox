<?php 

$titre = get_field('titre_introduction');
$descr = get_field('description_introduction');

$form = get_field('forrmulaire_inscription');

?>

<div id="section-introduction">
    <div class="container">
        <div class=" from-bottom">
            <?php if($titre): echo $titre; endif;?>
            <?php if($descr): echo $descr; endif;?>

            <?php if($form): echo do_shortcode($form);endif;?>
        </div>
    </div>
</div>
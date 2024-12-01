<?php 

$cttCol1   = get_field('description-footer','options');
$cttCol2   = get_field('horaires','options');
$cttCol3   = get_field('infos_contact_footer','options');

$copyright = get_field('copyright','options');
$cookies   = get_field('cookies','options');
$conf      = get_field('confidentialites','options');

// Responsive

$cttCol1Resp   = get_field('description-footer_resp','options');
$cttCol2Resp   = get_field('horaires_resp','options');
$cttCol3Resp   = get_field('infos_contact_footer_resp','options');

?>

<footer>
    <div class="container">
        <div class="footer-top no-mobile">
            <div class="col general-infos">
                <?php $logo = get_field('logo_negatif','options');?>
                
                <?php if($logo):?>
                    <div class="logo-footer">
                        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['title'];?>" />
                    </div>
                <?php endif;?>
            </div>

            <div class="col col-1">
                <?php if($cttCol1): echo $cttCol1; endif;?>
            </div>

            <div class="col col-2">
                <?php if($cttCol2): echo $cttCol2;endif;?>
            </div>

            <div class="col rs_footer">
                <?php if($cttCol3): echo $cttCol3;endif;?>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container desktop">
            <?php wp_nav_menu( array(
                'menu' => 'footer',
                'menu_class' => 'footer-list'
            ));?>
        </div>  
    </div>
</footer>

<?php wp_footer(); ?>
<?php get_header();?>

<div id="hero">
    <div class="container-full-width">
        <div class="swiper swiper-hero">
            <div class="swiper-wrapper">
                <?php 
                    if(have_rows('slides')):
                        while(have_rows('slides')): the_row();
                            $bg = get_sub_field('image');
                            $title = get_sub_field('titre');
                            $texte = get_sub_field('texte');
                            $link = get_sub_field('cta');?>

                            <div class="swiper-slide zoom-in" style="background-image:url('<?php echo $bg['url'];?>')";>
                                <div class="content-slide">
                                    <?php if($title): echo $title; endif;?>
                                    <?php if($texte): echo $texte; endif;?>

                                    <?php if($link):?>
                                        <a href="<?php echo $link['url'];?>" class="cta">
                                            <?php echo $link['title'];?>
                                        </a>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
        </div>

        <div class="swiper-pagination"></div>

    </div>
</div>

<?php get_template_part( 'templates-parts/section-introduction');?>
<?php get_template_part( 'templates-parts/section-composition');?>
<?php get_template_part( 'templates-parts/section-philosophie');?>
<?php get_template_part( 'templates-parts/section-citation');?>
<?php get_template_part( 'templates-parts/section-image-fullscreen');?>
<?php get_template_part( 'templates-parts/section-blog');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_footer();?>
<?php
/* Template Name: Woom Club */

$histImg = get_field('histoire_image');
$histBg = get_field('histoire_background');
$histoire_text = get_field('histoire_texte');

get_header();?>

<?php get_template_part( 'templates-parts/section-header');?>
<?php get_template_part( 'templates-parts/section-introduction');?>

<section id="section-histoire" <?php if($histBg): echo 'style="background-image: url('.$histBg['url'].');"'; endif;?>>
     <div class="container columns">
          <div class="colg">
               <img src="<?php echo $histImg['url'];?>" alt="<?php echo $histImg['title'];?>"/>
          </div>
          <div class="cold">
               <?php if($histoire_text): echo $histoire_text; endif;?>
          </div>
     </div>
</section>

<?php get_template_part( 'templates-parts/section-citation');?>
<?php get_template_part( 'templates-parts/section-nos-qualites');?>

<section id="section-avantages">
     <div class="container columns">
          <?php if(have_rows('avantages')):
               while(have_rows('avantages')): the_row();
                    $icon = get_sub_field('icone');
                    $title = get_sub_field('title');
                    $exp = get_sub_field('explication');?>

                    <div class="adv">
                         <div class="block-img">
                              <?php if($icon): echo '<img src="'.$icon['url'].'" alt="'.$icon['title'].'" />';endif;?>
                         </div>
                         <?php if($title): echo $title; endif;?>
                         <?php if($exp): echo $exp; endif;?>
                    </div>

               <?php endwhile;
          endif;?>
     </div>
</div>

<?php get_template_part( 'templates-parts/section-image-fullscreen');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_footer();?>
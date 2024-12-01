<?php
/* Template Name: Woom Club Interne*/


get_header();?>

<?php get_template_part( 'templates-parts/section-header');?>
<?php get_template_part( 'templates-parts/section-introduction');?>

<section id="listing_tools">
     <div class="container grid">
          <?php

          $args = array(
               'post_type' => 'tools',
               'post_statut' => 'publish',
               'limit' => 9
          );

          $query = new WP_Query($args);

          if($query->have_posts()):
               while($query->have_posts()): $query->the_post();
                    $img = get_field('miniature');
                    $title = get_field('nom');
                    $description = get_field('description');
                    $cta = get_field('pdf');
               
               ?>
                    <div class="tools-card">
                         <div class="block-img">
                              <?php if($img): echo '<img src="'.$img['url'].'" alt="'.$img['title'].'"/>'; endif; ?>
                         </div>

                         <?php if($title): echo $title; endif;?>
                         <?php if($description): echo substr($description,0,200).'...'; endif;?>

                         <?php if($cta):?>
                              <a href="<?php echo $cta['url'];?>" class="cta" target="_blank">Télécharger</a>
                         <?php endif;?>
                    </div>
               <?php endwhile;
          endif;
          wp_reset_postdata();

          ?>
     </div>
     <div class="container">
          <a href="#!" class="cta seemore">Voir plus</a>    
     </div>
</section>


<?php get_template_part( 'templates-parts/section-histoire');?>
<?php get_template_part( 'templates-parts/section-citation');?>
<?php get_template_part( 'templates-parts/section-nos-qualites');?>
<?php get_template_part( 'templates-parts/section-image-fullscreen');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_footer();?>
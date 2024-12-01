<section id="section-mosaique">
     <div class="container">
          <div class="columns">
               <?php if(have_rows('mosaique_line_1')):
                    while(have_rows('mosaique_line_1')): the_row();
                         $motif = get_sub_field('motif');
                         $text  = get_sub_field('texte_intro');
                         $image = get_sub_field('image');

                         if($motif):
                              echo '<div class="block-img">
                                   <img src="'.$motif["url"].'" alt="'.$motif["name"].'"/>
                              </div>';
                         endif;

                         if($text):
                              echo '<div class="text_mosaique">'.$text.'</div>';
                         endif;

                         if($image):
                              echo '<div class="block-img">
                                   <img src="'.$image["url"].'" alt="'.$image["name"].'"/>
                              </div>';
                         endif;
                    endwhile;
               endif;?>
          </div>

          <div class="columns">
               <?php if(have_rows('mosaique_line_2')):
                    while(have_rows('mosaique_line_2')): the_row();
                         $motif = get_sub_field('motif');
                         $text  = get_sub_field('texte_intro');
                         $image = get_sub_field('image');

                         if($text):
                              echo '<div class="text_mosaique">'.$text.'</div>';
                         endif;

                         if($motif):
                              echo '<div class="block-img">
                                   <img src="'.$motif["url"].'" alt="'.$motif["name"].'"/>
                              </div>';
                         endif;

                         if($image):
                              echo '<div class="block-img">
                                   <img src="'.$image["url"].'" alt="'.$image["name"].'"/>
                              </div>';
                         endif;
                    endwhile;
               endif;?>
          </div>
     </div>
</section>
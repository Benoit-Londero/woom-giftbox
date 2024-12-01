<section id="section-team">
     <div class="container columns">
          <?php

          if(have_rows('equipe')):
               while(have_rows('equipe')): the_row();

                    $pic = get_sub_field('photo_membre');
                    $nom = get_sub_field('nom');
                    $desc = get_sub_field('description');

                    echo '<div class="card-team">';

                    if($pic):
                         echo '<div class="block-img circle">
                                   <img src="'.$pic['url'].'" alt="'.$pic['title'].'"/>
                              </div>';
                    endif;
                    
                    if($nom): echo '<p><strong>'.$nom.'</strong></p>'; endif;
                    if($desc): echo '<p>'.$desc.'</p>'; endif;

                    echo '<div class="block-rs">';

                    if(have_rows('liens_sociaux')):
                         while(have_rows('liens_sociaux')): the_row();
                              $logo = get_sub_field('logo_rs');
                              $link = get_sub_field('lien_rs');
                              

                              echo '<a href="'.$link['url'].'">
                                        <img src="'.$logo['url'].'" alt="'.$logo['title'].'"/>
                                   </a>';
                         endwhile;
                    endif;

                    echo '</div></div>';
               endwhile;
          endif;?>
     </div>
</div>
<section id="compositionBox">
     <div class="container columns">
          <div class="colg">
               <ul class="list_gch">
                    <?php if(have_rows('composition_boite')):
                         while(have_rows('composition_boite')): the_row();
                              if(have_rows('produit_colonne_gauche')):
                                   $i = 1;
                                   
                                   while(have_rows('produit_colonne_gauche')): the_row();
                                        $texte = get_sub_field('produit');
                                        if($texte): echo '<li data-id="'.$i.'">'.$texte.'</li>'; endif;

                                        $i++;
                                   endwhile;
                              endif;
                         endwhile;
                    endif;?>
               </ul>
          </div>

          <div class="img_bx">
               <?php $img = get_field('image_boite');

               if($img): ?>
                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>"/>
               <?php endif;?>
          </div>

          <div class="cold">
               <ul class="list_drt">
                    <?php if(have_rows('composition_boite')):
                         while(have_rows('composition_boite')): the_row();
                              if(have_rows('produit_colonne_droite')):
                                   while(have_rows('produit_colonne_droite')): the_row();
                                        $texte = get_sub_field('produit');
                                        if($texte): echo '<li data-id="'.$i.'">'.$texte.'</li>'; endif;

                                        $i++;
                                   endwhile;
                              endif;
                         endwhile;
                    endif;?>
               </ul>
          </div>
     </div>
</section>
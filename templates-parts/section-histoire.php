<?php 

$histImg = get_field('histoire_image');
$histBg = get_field('histoire_background');
$histoire_text = get_field('histoire_texte');

?>

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
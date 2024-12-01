<?php

$citation = get_field('citation','options');

if($citation):?>
     <div id="section-citation">
          <div class="container">
               <?php echo $citation; ?>
          </div>
     </div>
<?php endif;?>
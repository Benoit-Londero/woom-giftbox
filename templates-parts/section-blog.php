<?php 

$limit;
is_front_page() ? $limit = 3 : $limit = 9;

$args = array(
    'posts_per_page' => $limit,
    'post_type' => 'post',
);

$news = new WP_Query($args);?>

<div id="section-blog">
    <?php if(!is_page(290)): 
        $title_blog = get_field('texte_blog'); ?>
        
        <div class="container">
            <?php if($title_blog): echo $title_blog; endif;?>
        </div>
    <?php endif;?>
    <div class="container columns">
        <?php if($news->have_posts()):
            while($news->have_posts()): $news->the_post();
                $thmb = get_the_post_thumbnail_url();
                $content = get_the_content();
                ?>
            
                <div class="card-news from-bottom">
                    <div class="block-img">
                        <img src="<?php echo $thmb;?>" alt=""/>
                    </div>

                    <?php echo the_title('<h3>','</h3>');?>
                    <?php echo '<p>'.substr($content,0 ,140) . '...</p>';?>
            
                    <a href="<?php echo the_permalink( );?>" class="cta cta-blog">Lire la suite</a>
                </div>
            <?php
            endwhile;
        endif;

        wp_reset_postdata();
    ?>
    </div>
    <div class="container cont_seemore">
        <?php if(is_front_page(  )):
            $cta = get_field('cta_blog');

            if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta ctaSeeMoreBlog"><?php echo $cta['title'];?></a>
            <?php endif;
        endif;?>
    </div>
</div>
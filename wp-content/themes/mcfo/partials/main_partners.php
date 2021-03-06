<?php $merop=get_category_by_slug('информационные-партнёры'); ?>
<div class="partners ">
    <div class="conteiner">
        <div class="tltlt-text">
            <h2> <?php echo $merop->name; ?>  </h2>
        </div>
        <div class="slider">
            <div class="arrows">
                <div class="prew">
                    <div class="con">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 175.7 323.5"  style="enable-background:new 0 0 175.7 323.5;" xml:space="preserve">
                            <path d="M0,160L140.6,0l35.2,45.7L70.3,160l105.4,114.3L140.6,320L0,160z"/>
                        </svg>
                    </div>
                </div>
                <div class="next">
                    <div class="con">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 175.7 323.5"  style="enable-background:new 0 0 175.7 323.5;" xml:space="preserve">
                            <path d="M0,160L140.6,0l35.2,45.7L70.3,160l105.4,114.3L140.6,320L0,160z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="con-slider"> 
                <?php $posts = get_posts ("category=15&orderby=date&numberposts=999"); 
                if ($posts) : 
                foreach ($posts as $post) : setup_postdata ($post);
                ?>
                <div class="item">
                    <a class="con" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <?php 
                    endforeach; 
                    wp_reset_postdata();
                    endif; 
                ?>
            </div>
        </div>
        <div class="going-to">
            <a href="<?php echo get_category_link($merop); ?>"> Все <?php echo $merop->name; ?> » </a>
        </div>
    </div>
</div>

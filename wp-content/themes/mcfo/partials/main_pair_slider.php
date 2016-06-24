<?php $merop=get_category_by_slug('meropriyatiya'); ?>
<div class="main_pair_slider pagination-slider">
    <div class="conteiner">
        <div class="tltlt-text">
            <h2><?php echo $merop->name; ?></h2>
        </div>
        <div class="filter">
            <ul>
                <?php 
                $args = array(
                        'type'         => 'post',
                        'child_of'     => 0,
                        'parent'       => '2',
                        'orderby'      => 'name',
                        'order'        => 'ASC',
                        'hide_empty'   => 1,
                        'hierarchical' => 1,
                        'exclude'      => '',
                        'include'      => '',
                        'number'       => 0,
                        'taxonomy'     => 'category',
                        'pad_counts'   => false,
                        // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                );
                $cat_all=get_categories($args);
                ?>
                <li>
                    <input type="radio" name="filter" value="all" id="all2" checked>
                    <label for="#all2">
                        <span class="butify"></span>
                        <span class="text"> Все </span>
                    </label>
                </li>
                <?php foreach ($cat_all as $cat): ?>
                <li>
                    <input type="radio" name="filter" value="<?php echo $cat->slug; ?>" id="<?php echo $cat->slug.$cat->term_id; ?>" >
                    <label for="#<?php echo $cat->slug.$cat->term_id; ?>">
                        <span class="butify"></span>
                        <span class="text"> <?php echo $cat->name; ?> </span>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul> 
        </div>
        <div class="slider">
            <div class="preload-hipe">
                щось сюди придумати
            </div>
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
                 <?php $posts = get_posts ("category=2&orderby=date&numberposts=999"); ?> 
                <?php if ($posts) : ?>
                <?php 
                $count_out=1;
                foreach ($posts as $post) : setup_postdata ($post);
                if($count_out==1) echo '<ul class="item">';
                ?>
                    <li>
                        <div class="con">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
                        <div class="aftertext">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </div>
                    </li>
                <?php 
                if($count_out==2){ echo '</ul>'; $count_out=1;}else{$count_out++;}
                
                  endforeach;
                  wp_reset_postdata();
                ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="going-to">
            <a href="<?php echo get_category_link($merop); ?>">Перейти в раздел »</a>
        </div>
    </div>
</div>
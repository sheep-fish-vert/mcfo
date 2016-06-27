<div class="debats">
    <div class="conteiner">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
        <div class="tltlt-text">
            <h2><?php echo $wp_query->queried_object->cat_name; ?></h2>
        </div>
        <div class="items-wrap debats-item">
            <?php 
                $posts = get_posts( array(
                        'numberposts'     => 999, // тоже самое что posts_per_page
                        'offset'          => 0,
                        'category'        => $wp_query->query_vars['cat'],
                        'orderby'         => 'post_date',
                        'order'           => 'DESC',
                        'include'         => '',
                        'exclude'         => '',
                        'meta_key'        => '',
                        'meta_value'      => '',
                        'post_type'       => 'post',
                        'post_mime_type'  => '', // image, video, video/mp4
                        'post_parent'     => '',
                        'post_status'     => 'publish'
                ) );
                foreach($posts as $post){ setup_postdata($post);
                    ?>
                    <div class="item">
                        <a href="<?php the_permalink() ?>" class="con">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </a>
                        <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
                        <a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a>
                        <?php
                            $count=0;
                            if( have_rows('опоненты') ):
                                $my_fields = get_field_object('опоненты');
                                $count = (count($my_fields['value']));
                            endif;
                            $inc=0;
                         ?>
                        <div class="oponents">
                            <?php while (have_rows('опоненты')): the_row();
                                $inc++;
                                $oponent=get_sub_field('опонент');
                                echo $oponent;
                                if($count>$inc) echo ' / ';
                            endwhile; ?>
                        </div>
                        <div class="aftertext"><?php echo get_field('краткое_описание_мероприятия'); ?></div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
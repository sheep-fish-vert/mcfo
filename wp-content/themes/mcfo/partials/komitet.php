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
                    $posada= get_field('посада_комитет'); 
                    $name= get_field('имя_комитет');
                    $description= get_field('описание_комитет');
                    $src_foto= get_field('фото_комитет');
                    ?>
                    <div class="item">
                        <?php echo $posada; //Вывод посады ?>
                        <?php echo $name; //Вывод имени ?>
                        <?php echo $description; //Вывод описания ?>
                        <?php echo $src_foto; //Вывод ссылки на фото ?>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
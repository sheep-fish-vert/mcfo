<div class="debats-inside">
    <div class="conteiner">
        <div class="content">
            <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            <div class="all_wrapper">
                <div class="content_wrapper">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
                    <div class="ctext">
                        <?php echo $post->post_content; ?>
                    </div>
                    <div class="after-soc">
                        <p>Поделиться:</p>
                        <script type="text/javascript">(function() {
                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                            if (window.ifpluso==undefined) { window.ifpluso = 1;
                              var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                              s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                              s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                              var h=d[g]('body')[0];
                              h.appendChild(s);
                            }})();
                        </script>
                        <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                    </div>
                </div>
                <?php if(have_rows('похожие_новости')): ?>
                <div class="other_news_wrapper">
                    <div class="title_other_news">Похожие новости</div>
                    <div class="other_news">
                        <ul>
                            <?php while (have_rows('похожие_новости')): the_row();
                                $other_news=get_sub_field('новость');
                                global $post;
                                $post=$other_news;
                                setup_postdata( $post );
                             ?>
                            <li>
                                <a href="<?php the_permalink() ?>">
                                    <div class="img_other_news">
                                        <img alt="false" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    </div>
                                </a>
                                <div class="date_other_news"><?php echo get_the_date('d/m/Y'); ?></div>
                                <a href="<?php the_permalink() ?>">
                                    <div class="element_title"><?php the_title(); ?></div>
                                </a>
                            </li>
                            <?php wp_reset_postdata(); endwhile;  ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
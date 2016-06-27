<div class="debats-inside">
    <div class="conteiner">
        <div class="content">
            <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
            <div class="title"><?php the_title(); ?></div>
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
            <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
            <?php if(get_field('видео_дебата')!=''): ?>
            <div class="video-frame">
                <?php echo htmlspecialchars_decode( get_field('видео_дебата')); ?>
                <div class="video-play"></div>
            </div>
            <?php endif; ?>
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
                    }})();</script>
                  <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
            </div>


        </div>
    </div>
</div>
<div class="sloika">
    <div class="convert">
        <?php while(have_rows('блок_2')): the_row(); ?>
                <?php 
                    $pic = get_sub_field('изображение');
                    $title=get_sub_field('оглавление');
                    $desc=get_sub_field('текст');
                ?>
        <div class="tost">
            
            <div class="titl"><?php echo $title; ?></div>
            <div class="con">
                <img src="<?php echo $pic; ?>" alt="">
            </div>
            <div class="text"><?php echo $desc; ?></div>
            <div class="going">
                <?php while (have_rows('ссылки')): the_row(); ?>
                <?php
                    $href=get_sub_field('ссылка');
                    $txt_href=get_sub_field('текст_ссылки');
                ?>
                <a href="<?php echo $href; ?>"><?php echo $txt_href; ?> »</a>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
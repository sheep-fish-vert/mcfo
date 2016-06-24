<div class="main_slider">
    <div class="conteiner">
        <div class="sliding">
            <?php while(have_rows('слайдер')): the_row(); ?>
                <?php 
                    $pic = get_sub_field('изображение');
                    $href=get_sub_field('ссылка');
                    $title=get_sub_field('оглавление');
                    $desc=get_sub_field('текст');
                ?>
            <div class="slider-item" style="background-image: url('<?php echo $pic; ?>');">
                <div class="con">
                    <div class="named"><?php echo $title; ?></div>
                    <div class="after"><?php echo $desc; ?></div>
                    <a href="<?php echo $href; ?>" class="button"> 
                        <span>Подробнее</span>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
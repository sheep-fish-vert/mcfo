<div class="main_slider">
    <div class="conteiner">
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
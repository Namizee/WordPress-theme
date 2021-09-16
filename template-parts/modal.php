<?php
$gallery = get_field('gallery', get_the_ID());
?>
<div id="modal-product">
    <div class="modal-box">
        <div class="product-popup">
            <div class="popup-close">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg" alt="">
            </div>
            <div class="product-popup__box">
                <div class="popup-slider">
                    <div class="slider-for">
                        <div class="slider-for__box">
                            <?php foreach ($gallery as $gallery_item): ?>
                                <div class="slider-for__box-item">
                                    <img src="<?php echo $gallery_item['image']['url'] ?>"
                                         alt="<?php echo $gallery_item['image']['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="slider-nav__box">
                            <?php foreach ($gallery as $gallery_item): ?>
                                <div class="slider-nav__box-item">
                                    <img src="<?php echo $gallery_item['image']['url'] ?>"
                                         alt="<?php echo $gallery_item['image']['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-info__box">
                        <div class="product-info__box-price">
                            <div class="title"><?php the_title(); ?></div>
                            <span><?php echo get_field('price', get_the_ID()) ?></span>
                        </div>
                        <?php get_template_part('template-parts/tags') ?>
                        <div class="product-info__box-text">
                            <?php the_content(); ?>
                        </div>
                        <div class="product-info__box-nav">
                            <a class="btn btn-order" href="#">
                                <span>Консультация</span>
                                <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

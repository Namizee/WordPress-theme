<div class="vouchers-item" id="<?php the_ID(); ?>">
    <div class="vouchers-item__box">
        <div class="vouchers-item__box-images">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="vouchers-item__box-description">
            <div class="vouchers-item__description-info">
                <div class="vouchers-item__info-title"><?php the_title() ?></div>
                <div class="vouchers-item__info-price"><?php echo get_field('price', get_the_ID()) ?></div>
            </div>
            <?php get_template_part('template-parts/tags') ?>
            <a class="btn modal-product" href="#" data-product="<?php the_ID(); ?>">
                <span>Узнать больше</span>
                <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                </svg>
            </a>
        </div>
    </div>
</div>

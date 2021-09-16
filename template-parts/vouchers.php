<?php

$args = array(
    'post_type' => 'post',
);
$vouchers_posts = new WP_Query($args);
$popular_title = get_field('popular_title');
?>

<?php if ($vouchers_posts->have_posts()): ?>
    <section class="vouchers" id="popular">
        <div class="container-fluid">
            <div class="title"><?php echo $popular_title ?></div>
            <div class="vouchers__list row">
                <?php
                $vouchers_posts = new WP_Query($args);
                while ($vouchers_posts->have_posts()) : $vouchers_posts->the_post(); ?>
                    <div class="vouchers-item col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="vouchers-item__box">
                            <div class="vouchers-item__box-images">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="blog-item__box-images">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="vouchers-item__box-description">
                                <div class="vouchers-item__description-info">
                                    <div class="vouchers-item__info-title"><?php the_title(); ?></div>
                                    <?php if ($vouchers_price = get_field('price', $vouchers_posts->ID)): ?>
                                        <div class="vouchers-item__info-price"><?php echo $vouchers_price ?></div>
                                    <?php endif; ?>
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
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <a class="btn btn-invert btn-order" href="#" >
                <span>Проконсультироваться</span>
                <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                </svg>
            </a>
        </div>
    </section>
<?php endif; ?>

<?php
$slider_title = get_field('slider_title');
$cat_arr = array(
    'type' => 'post',
    'orderby' => 'id',
    'order' => 'ASC',
    'exclude' => array(1)
);
$categories = get_categories($cat_arr);

$args = array(
    'cat' => $categories[0]->term_id,
    'post_type' => 'post',
    'post_per_page' => -1
);
$query = new WP_Query($args);
?>
<?php if($query->posts): ?>
<section class="slider" id="best">
    <div class="container-fluid">
        <div class="title left">
            <?php echo esc_html($slider_title) ?>
        </div>
        <div class="slider-navigation">
            <div class="slider-tabs">
                <div class="slider-tabs__box">
                    <?php $counter = 0; foreach ($categories as $cat): ?>
                        <li class="slider-tabs__box-item  <?php echo $counter === 0 ? 'active' : ''?>">
                            <a href="<?php get_category_link($cat->term_id) ?>"
                               data-category="<?php echo $cat->term_id ?>"><?php echo $cat->name; ?></a>
                        </li>
                    <?php $counter++; endforeach; ?>
                </div>
            </div>
            <div class="slider-btns">
                <div class="slider-btn slider-btn--prev">
                    <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 1L1.5 5L5.5 9" stroke-width="1.5"/>
                    </svg>

                </div>
                <div class="slider-btn slider-btn--next">
                    <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="slider-box">
            <div class="slider-box__list">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'trip'); ?>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $testimonials_title = get_field('testimonials_title');
    $testimonial = get_field('testimonial');
?>

<?php if($testimonial): ?>
<section class="reviews" id="reviews">
    <div class="container-fluid">
        <div class="title"><?php echo esc_html($testimonials_title) ?></div>
        <div class="reviews__list row">
            <?php foreach ($testimonial as $testimonial_item): ?>
            <div class="reviews-item col-lg-6 col-12">
                <div class="reviews-item__box">
                    <div class="reviews-item__box-text">
                       <?php echo $testimonial_item['testimonial_text'] ?>
                    </div>
                    <div class="reviews-item__reviewer">
                        <div class="reviews-item__reviewer-images">
                            <img src="<?php echo esc_attr($testimonial_item['reviewer_photo']['url']) ?>" alt="<?php echo esc_attr($testimonial_item['reviewer_photo']['alt']) ?>">
                        </div>
                        <div class="reviews-item__reviewer-info">
                            <div class="reviews-item__reviewer-name">
                                <?php echo esc_html($testimonial_item['reviewer_name']) ?>
                            </div>
                            <div class="reviews-item__reviewer-tour">
                                <?php echo esc_html($testimonial_item['reviewer_travel']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

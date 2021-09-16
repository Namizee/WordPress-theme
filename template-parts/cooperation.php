<?php
$cooperation_title = get_field('cooperation_title');
$cooperation = get_field('cooperation');
?>

<?php if ($cooperation): ?>
    <section class="services">
        <div class="container-fluid">
            <div class="title">
                <?php echo esc_html($cooperation_title) ?>
            </div>
            <div class="services__list row">
                <?php foreach ($cooperation as $cooperation_item): ?>
                    <div class="services-item col-xl-3 col-sm-6 col-12">
                        <div class="services-item__box">
                            <?php
                            $cooperation_item_image = $cooperation_item['icon']['url'];
                            $cooperation_item_alt = $cooperation_item['icon']['alt']
                            ?>
                            <div class="services-item__box-images">
                                <img src="<?php echo esc_url($cooperation_item_image)?>" alt="<?php echo esc_attr($cooperation_item_alt) ?>">
                            </div>
                            <div class="services-item__box-text">
                                <?php echo $cooperation_item['text'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

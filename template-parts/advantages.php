<?php
$advantages_title = get_field('advantages_title');
$advantages = get_field('advantages');
?>
<?php if ($advantages): ?>
    <section class="advantages" id="advantages">
        <div class="container-fluid">
            <div class="title"><?php echo esc_html($advantages_title) ?></div>
            <div class="advantages__list row">
                <?php foreach ($advantages as $advantage): ?>
                    <div class="advantages-item col-xl-3 col-sm-6 col-12">
                        <div class="advantages-item__box">
                            <?php
                            $advantage_image = $advantage['icon']['url'];
                            $advantage_alt = $advantage['icon']['alt']
                            ?>
                            <div class="advantages-item__box-images">
                                <img src="<?php echo esc_url($advantage_image)?>" alt="<?php echo esc_attr($advantage_alt) ?>">
                            </div>
                            <div class="advantages-item__box-text">
                                <?php echo $advantage['text'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($tags = get_field('product_tags', get_the_ID())): ?>
    <div class="tags">
        <div class="tags-list">
            <?php foreach ($tags as $tag): ?>
                <div class="tags-list__item">
                    <img class="tags-list__item-image" src="<?php echo get_template_directory_uri();
                    switch ($tag['label']) {
                        case "days":
                            echo '/assets/img/calendar.svg';
                            break;
                        case "resort":
                            echo "/assets/img/beach.svg";
                            break;
                        case "moving":
                            echo "/assets/img/night.svg";
                            break;
                        case "holidays":
                            echo "/assets/img/holiday.svg";
                            break;
                    }; ?>" alt="">
                    <span class="tags-list__item-text" ><?php echo $tag['value'] ?></span>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>

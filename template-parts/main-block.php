<?php
$main_image = get_field('main_image');
$main_title = get_field('main_title');
$main_text = get_field('main_text');
?>
<main class="main" style="background-image: url('<?php echo  esc_url($main_image['url'])?>') ">
    <div class="container-fluid">
        <div class="main__box">
            <div class="main__box-title">
                <?php echo esc_html($main_title) ?>
            </div>
            <div class="main__box-text">
                <?php echo $main_text ?>
            </div>
            <a class="btn btn-invert anchor" href="#popular">
                <span>Выбрать направление</span>
                <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                </svg>
            </a>
        </div>
    </div>
</main>

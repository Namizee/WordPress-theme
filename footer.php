<?php
    $footer_logo = get_field('logo_footer', 'options');
    $number_phone = get_field('number_phone', 'options');
    $email = get_field('email', 'options');
    $footer_address = get_field('address', 'options');
?>
<footer class="footer">
    <div class="container-fluid">
        <div class="footer__box">
            <a class="footer-logo" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo esc_url($footer_logo['url']) ?>" alt="<?php echo esc_attr($footer_logo['alt']) ?>">
            </a>
            <nav class="footer-contact">
                <ul class="footer-contact__list">
                    <li class="footer-contact__list-item phone">
                        <a href="tel:<?php echo esc_html($number_phone) ?>">
                            <?php echo esc_html($number_phone) ?>
                        </a>
                    </li>
                    <li class="footer-contact__list-item mail">
                        <a href="mailto:<?php echo esc_html($email) ?>">
                            <?php echo esc_html($email) ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="footer-address"><?php echo $footer_address;?></div>
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Меню',
                    'menu_class' => 'footer-navigation__list menu',
                    'container' => '',
                    'menu_id' => 'footer-menu',
                ));
                ?>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

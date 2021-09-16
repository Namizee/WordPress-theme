<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOBZAR</title>
    <?php wp_head(); ?>
</head>
<body>
<div id="modal">
    <div class="modal-box">
        <div class="consultation-popup">
            <div class="popup-close">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg" alt="">
            </div>
            <form action="#" class="consultation-form" id="consultation-form">
                <div class="consultation-form__box">
                    <div class="consultation-form__box-title">Консультация</div>
                    <div class="consultation-form__box-text">Введите свои контакты и мы позвоним вам</div>
                    <div class="consultation-form__box-list">
                        <div class="consultation-form__list-item">
                            <label>Ваше имя</label>
                            <input type="text" placeholder="Введите ваше имя" name="user_name">
                        </div>
                        <div class="consultation-form__list-item">
                            <label>Телефон</label>
                            <input type="text" placeholder="Введите ваш телефон" name="user_phone">
                        </div>
                        <div class="consultation-form__list-item">
                            <label>Почта</label>
                            <input type="text" placeholder="Введите ваш email" name="user_email">
                        </div>
                    </div>
                    <button class="btn btn-invert">
                        <span>Заказать тур</span>
                        <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal-thanks">
    <div class="modal-box">
    <div class="consultation-popup">
        <div class="popup-close">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg" alt="">
        </div>
        <form action="#" class="consultation-form" id="consultation-form">
            <div class="consultation-form__box">
                <div class="consultation-form__box-text">Наши специалисты свяжутся с вами!</div>
            </div>
        </form>
    </div>
    </div>
</div>
<header class="header">
    <div class="container-fluid">
        <div class="header__box">
            <button class="header-burger">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/header-burger.svg" alt="">
            </button>
            <?php the_custom_logo(); ?>
            <nav class="header-navigation">
                <div class="menu-close">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg" alt="">
                </div>
                <?php
                wp_nav_menu(array(
                    'menu' => 'Меню',
                    'menu_class' => 'header-navigation__list menu',
                    'container' => '',
                    'menu_id' => 'header-menu',
                ));
                ?>
            </nav>
            <a class="btn btn-order" href="#">
                <span>Заказать звонок</span>
                <svg viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke-width="1.5"/>
                </svg>
                <img class="smartphone" src="<?php echo get_template_directory_uri() ?>/assets/img/smartphone.svg"
                     alt="">
            </a>
        </div>
    </div>
</header>

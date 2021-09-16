<?php


if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php')) {

    require_once __DIR__ . '../../../../vendor/autoload.php';

    if (class_exists('\kobzar\initApplication')) {

        new \kobzar\initApplication();

    } else {

        exit('Fatal Error: Проверьте наличие класса InitApplication');

    }

} else {

    exit('Fatal Error: Проверьте правильность подключения автозагрузчика классов и композера');

}

if (!function_exists('debug')) {
    function debug($arr = [], $exit = '')
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

        if ($exit === 'exit') {
            exit;
        }
    }
}



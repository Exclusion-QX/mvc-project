<?php

// FRONT CONTROLLER

// Общие настройки
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    // Подключение файлов системы
    define('ROOT', dirname(__FILE__)); //В переменную ROOT кладет корневую директорию
    require_once(ROOT . '/components/Router.php');
    require_once(ROOT . '/components/Db.php');


    // Вызов Router
    $router = new Router();
    $router->run();
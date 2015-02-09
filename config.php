<?php

    $pdo = new PDO(
        'mysql:host=localhost;dbname=php-base-les5;charset=utf8',
        'root',
        'root'
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Доступные страницы приложения

    $actions = ['insert', 'list', 'delete', 'update'];
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    if (!in_array($action, $actions)) {
        exit('Bye');
    }

    include $action . '.php';
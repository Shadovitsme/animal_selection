<?php

$router = require_once('../router.php');

$router->register('/', function () {
    include('firstTryTree.php');
});

$router->register('/test', function () {
    echo 'hello';
});

$router->register('/add', function () {
    include('add.php');
});

$router->resolve($_SERVER['REQUEST_URI']);

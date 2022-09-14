<?php

require_once  'rb_php';

$db = [
    'dsn' => 'mysql:host-localhost;dbname-from;charset=utf8',
    'user' =>'savasob',
    'pass' => '341295asdF'
];

R::setup($db ['dsn'], $db['user'],$db['pass']);
R::freeze(true);
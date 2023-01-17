<?php

$config = [];

$config['app_version'] = '7.2.6';

$config = array_merge(
    $config,
    require __DIR__ . '/config.master.php',
);
